<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Car_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarImageController extends Controller
{

    public function index($id)
    {
        $car = Car::findOrFail($id);
        $carImage = Car_image::where('car_id',$id)->get();
        return view('dashboard.car.carImage.index',['carImage'=>$carImage , 'car'=>$car]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request , $id)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:png,jpg,jpeg,webp'
        ]);

        $car = Car::findOrFail($id);

        $imageData = [];
        if($files = $request->file('images')){

            foreach($files as $key => $file){

                $extension = $file->getClientOriginalExtension();
                $filename = $key.'-'.time(). '.' .$extension;

                $path = "uploads/carImage/";

                $file->move($path, $filename);

                $imageData[] = [
                    'car_id' => $car->id,
                    'path' => $path.$filename,
                ];
            }
        }

        Car_image::insert($imageData);

        return redirect()->back()->with('status', 'Uploaded Successfully');
    }


    public function show(Car_image $car_image)
    {
        //
    }


    public function edit(Car_image $car_image)
    {
        //
    }


    public function update(Request $request, Car_image $car_image)
    {
        //
    }


    public function destroy($id)
    {

        $car_id= request()->car_id;

        $carImg = Car_image::findOrFail($id);
        if(File::exists($carImg->path)){
            File::delete($carImg->path);
        }
        $carImg->delete();
        return to_route('car.upload.images',$car_id)->with('status', 'Image Deleted');
    }

}
