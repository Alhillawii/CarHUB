<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarDetailsRenderController extends Controller
{
    public function show($id)
    {
        $car = Car::with(['images', 'reviews', 'engine', 'brand', 'transmission'])->findOrFail($id);

        return view('carDetail.index', [
            'car' => $car,
            'brand' => $car->brand,
            'images' => $car->images,
            'reviews' => $car->reviews,
            'engine' => $car->engine,
            'transmission' => $car->transmission
        ]);
    }

    public function addComment(Request $request, $carId)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:1000',
        ]);

        $car = Car::findOrFail($carId);

        Review::create([
            'rating' => $request->input('rating'),
            'reviews' => $request->input('review'),
            'user_id' => Auth::id(), 
            'car_id' => $car->id,
        ]);

        return redirect()->route('car.details', $carId)->with('success', 'Comment added successfully!');
    }
}
