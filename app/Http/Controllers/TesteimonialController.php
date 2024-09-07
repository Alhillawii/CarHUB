<?php

namespace App\Http\Controllers;

use App\Models\Testeimonial;
use Illuminate\Http\Request;


class TesteimonialController extends Controller
{

    public function index()
    {
        $testimonials = Testeimonial::all();
        return view('dashboard.testimonials.index' ,['testimonials' => $testimonials]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $testimonial = Testeimonial::withTrashed()->findOrFail($id);
        return view('dashboard.testimonials.show', compact('testimonial'));
    }

    public function edit(Testeimonial $testeimonial)
    {
        //
    }

    public function update(Request $request, Testeimonial $testeimonial)
    {
        //
    }

    public function destroy($id)
    {
        $testimonial = Testeimonial::findOrFail($id);
        $testimonial->delete();

        return redirect("testimonials");
    }
}
