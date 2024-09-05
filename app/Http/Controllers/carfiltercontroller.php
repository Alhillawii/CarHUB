<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class carfiltercontroller extends Controller
{
    public function filterCars(Request $request)
{
    $carType = $request->input('car_type');
    $seats = $request->input('seats');
    $minPrice = $request->input('min_price');
    $maxPrice = $request->input('max_price');

    
    $cars = Car::query()
        ->when($carType, function ($query, $carType) {
            return $query->where('type', $carType);
        })
        ->when($seats, function ($query, $seats) {
            return $query->where('seat', $seats);
        })
        ->when($minPrice, function ($query, $minPrice) {
         
            if (is_numeric($minPrice)) {
                return $query->where('pice', '>=', (float)$minPrice);
            }
            return $query; 
        })
        ->when($maxPrice, function ($query, $maxPrice) {
            if (is_numeric($maxPrice)) {
                return $query->where('pice', '<=', (float)$maxPrice);
            }
            return $query; 
        })
        ->get();

    return view('master.carcat', compact('cars'));
}
}
