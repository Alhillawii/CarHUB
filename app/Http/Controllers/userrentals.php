<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Rentals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userrentals extends Controller
{
        public function index()
    {
        $brand=Brand::All();
        $userId = Auth::id();
        $rentals = Rentals::where('user_id', $userId)->orderBy('rental_start_date', 'desc')->get();
        return view('userrentals.index', compact('rentals'));
        
    }
    
    // public function update(Request $request, $id)
    // {
    //     $rental = Rentals::find($id);
    //     if ($rental) {
    //         // dd($rental->rental_start_date);
    //         $rental->rental_start_date = $request->input('startDate');
    //         $rental->rental_end_date = $request->input('endDate');
    //         $rental->save();
    //         return redirect()->back();
    //     }
    //     return redirect()->back();
    // }

    public function cancel($id)
    {
        $rental = Rentals::find($id);
        if ($rental) {
            $rental->status = 'Cancelled';
            $rental->save();
            return redirect()->back();
        }
        return redirect()->back();
    }
}
