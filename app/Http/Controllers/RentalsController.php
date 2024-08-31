<?php

namespace App\Http\Controllers;

use App\Models\Rentals; 
use Illuminate\Http\Request;

class RentalsController extends Controller
{
    //---------------------------------index-------------------------------------------//
    public function index()
    {
        $rentals = Rentals::all();
        return view('rentals.index', compact('rentals'));
    }

    //-------------------------------soft delete---------------------------------------//
    public function destroy($id)
    {
        $rental = Rentals::findOrFail($id);
        $rental->delete(); // Soft delete
        return redirect()->route('rentals.index')->with('success', 'Rental soft deleted successfully');
    }

    //----------------------Restore the soft deleted resource--------------------------//
    public function restore($id)
    {
        $rental = Rentals::withTrashed()->findOrFail($id); // Use Rentals instead of Rental
        $rental->restore();
        return redirect()->route('rentals.index')->with('success', 'Rental restored successfully');
    }
}
