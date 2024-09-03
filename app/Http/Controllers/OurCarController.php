<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class OurCarController extends Controller
{
    public function index()
    {
        $cars = Car::with('engine', 'transmission', 'reviews') 
            ->get();

        return view('master.carcat', ['cars' => $cars]);
    }
}
