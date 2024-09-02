<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        return view('dashboard.dash.main');
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

    public function update(Request $request, Rentals $rentals)
    {
        //
    }

    public function destroy(Rentals $rentals)
    {
        //
    }
}
