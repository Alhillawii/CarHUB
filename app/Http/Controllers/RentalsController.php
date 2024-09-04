<?php

namespace App\Http\Controllers;

use App\Models\Rentals;
use Illuminate\Http\Request;

class RentalsController extends Controller
{
    public function index()
    {
        $rentals = Rentals::all();
        
        return view('dashboard.rental.index',['rentals'=>$rentals]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Rentals $rental)
    {
        return view('dashboard.rental.show',['rental'=>$rental]);
    }


    public function edit(Rentals $rental)
    {
        return view('dashboard.rental.edit', ['rental' => $rental]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rentals $rental)
    {
        $start_date = request()->start_date;
        $end_date = request()->end_date;
        $status = request()->status;

        $rental->update([
            'rental_start_date' => $start_date,
            'rental_end_date' => $end_date,
            'status' => $status
        ]);
        return to_route('rental.show', $rental->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rentals $rental)
    {
        $rental->delete();
        return to_route('rental.index');
    }
}
