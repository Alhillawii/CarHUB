<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Engine;
use App\Models\Transmission;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function index()
    {
        $CarsFromDB = Car::all();
        return view("dashboard.car.index", ["cars" => $CarsFromDB]);
    }

    public function create()
    {
        $brands = Brand::all();
        $engine = Engine::all();
        $transmission = Transmission::all();
        return view('dashboard.car.create', ['brands' => $brands , 'engines' => $engine, 'transmissions' => $transmission]);
    }

    public function store(Request $request)
    {
        request()->validate(
            [

                'name'=>['required','min:3'],
                'year'=>['required','numeric','min:4'],
                'seat'=>['required','min:1'],
                'color'=>['required','min:3'],
                'price'=>['required','numeric'],

            ]
        );

        $brand = request()->brand;
        $name = request()->name;
        $year = request()->year;
        $seat = request()->seat;
        $color = request()->color;
        $price = request()->price;
        $engine = request()->engine;
        $type = request()->type;
        $status = request()->status;
        $transmission = request()->transmission;




        Car::create([
            'brand_id' => $brand,
            'engine_id' => $engine,
            'transmission_id' => $transmission,
            'name'=>$name,
            'pice'=>$price,
            'seat'=>$seat,
            'color'=>$color,
            'year'=>$year,
            'status'=>$status,
            'type'=>$type,

        ]);


        return to_route('car.index');
    }

    public function show(Car $car)
    {
        return view('dashboard.car.show', ['car' => $car]);
    }

    public function edit(Car $car)
    {
        $brands = Brand::all();
        $engine = Engine::all();
        $transmission = Transmission::all();
        return view('dashboard.car.edit', ['car' => $car , 'brands' => $brands , 'engines' => $engine, 'transmissions' => $transmission]);
    }

    public function update(Request $request, Car $car)
    {
        request()->validate(
            [

                'name'=>['required','min:3'],
                'year'=>['required','numeric','min:4'],
                'seat'=>['required','min:1'],
                'color'=>['required','min:3'],
                'price'=>['required','numeric'],

            ]
        );


        $brand = request()->brand;
        $name = request()->name;
        $year = request()->year;
        $seat = request()->seat;
        $color = request()->color;
        $price = request()->price;
        $engine = request()->engine;
        $type = request()->type;
        $status = request()->status;
        $transmission = request()->transmission;


        $car->update(
            [
                'brand_id' => $brand,
                'engine_id' => $engine,
                'transmission_id' => $transmission,
                'name'=>$name,
                'pice'=>$price,
                'seat'=>$seat,
                'color'=>$color,
                'year'=>$year,
                'status'=>$status,
                'type'=>$type,
            ]
        );


        //3- redirection to posts.show
        return to_route('car.show', $car->id);
    }


    public function destroy(Car $car)
    {
        $car->delete();
        return to_route('car.index');
    }

}
