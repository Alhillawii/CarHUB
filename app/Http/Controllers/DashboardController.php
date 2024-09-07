<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Rentals;
use App\Models\Transmission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function update(Request $request, User $admin)
    {
        // Get the authenticated user
        $User = Auth::user();
    
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg'],
        ]);
    
        // Initialize $fileName as null
        $fileName = $User->image; // Keep the old image if no new one is uploaded
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $path = 'uploads/User/';
            $file->move($path, $fileName);
    
            // Update the image path if a new image was uploaded
            $fileName = $path . $fileName;
        }
    
        // Update user details
        $User->update([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'image' => $fileName,
        ]);
    
        // Flash success message to session
        return to_route('dashboard.admin.index')->with('success', 'Profile updated successfully!');
    }
    
    public function destroy(Rentals $rentals)
    {
        //
    }
}
