<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Rentals;
use App\Models\Transmission;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $cars = Car::all();
        $rentals = Rentals::all();
        $testimonials = Transmission::all();
        $users = User::all();
        $brands = Brand::all();
        return view('dashboard.dash.main', compact('cars', 'rentals', 'testimonials', 'users','brands'));
    }

    public function indexTwo()
    {

        return view('dashboard.dash.admin');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Rentals $rentals)
    {
        //
    }

    public function edit(Rentals $rentals)
    {
        //
    }

    public function update(Request $request ,User $admin)
    {
        $name = request()->name;
        $email = request()->email;
        $mobile = request()->mobile;


        $admin->update(
            [
                'name'=>$name,
                'email'=>$email,
                'mobile'=>$mobile,

            ]
        );


        //3- redirection to posts.show
        return to_route('dashboard.admin.index');
    }

    public function destroy(Rentals $rentals)
    {
        //
    }
}
