<?php

namespace App\Http\Controllers;

use App\Models\Testeimonial;
use Illuminate\Http\Request;


class TesteimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testeimonial::all();
        return view('dashboard.testimonials.index' ,['testimonials' => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $testimonial = Testeimonial::withTrashed()->findOrFail($id);
        return view('dashboard.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testeimonial $testeimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testeimonial $testeimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $testimonial = Testeimonial::findOrFail($id);
        $testimonial->delete();

        return redirect("testimonials");
    }
}
