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
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        $car = Car::findOrFail($request->input('car_id'));

        $startDate = \Carbon\Carbon::parse($request->input('start_date'));
        $endDate = \Carbon\Carbon::parse($request->input('end_date'));

        Rentals::create([
            'user_id' => Auth::id(),
            'car_id' => $car->id,
            'rental_start_date' => $startDate,
            'rental_end_date' => $endDate,
            'status' => 'Pending',
        ]);

        return redirect()->route('car.details', $car->id);
    }
}
