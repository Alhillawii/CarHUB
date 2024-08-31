<?php
namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rentals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarReservationController extends Controller
{
    public function reserve(Request $request)
    {
        // Validate the input
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        $car = Car::findOrFail($request->input('car_id'));

        $startDate = \Carbon\Carbon::parse($request->input('start_date'));
        $endDate = \Carbon\Carbon::parse($request->input('end_date'));

        // $days = $startDate->diffInDays($endDate);

        // $pricePerDay = 50; // Example fixed price per day
        // $totalPrice = $pricePerDay * $days;

        Rentals::create([
            'user_id' => Auth::id(),
            'car_id' => $car->id,
            'rental_start_date' => $startDate,
            'rental_end_date' => $endDate,
            'status' => 'reserved',
        ]);

        // Redirect back with success message
        return redirect()->route('car.details', $car->id);
    }
}