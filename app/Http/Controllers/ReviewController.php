<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::with('user', 'car')->paginate(10);
        return view('dashboard.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.review.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|string|max:5',
            'reviews' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
        ]);

        Review::create($request->all());

        return redirect()->route('dashboard.review.index')->with('success', 'Review created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $review = Review::find($id);

        if (!$review) {
            return redirect()->route('dashboard.review.index')->with('error', 'Review not found.');
        }

        return view('dashboard.review.show', compact('review'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $review = Review::find($id);

        if (!$review) {
            return redirect()->route('dashboard.review.index')->with('error', 'Review not found.');
        }

        $review->delete();

        return redirect()->route('dashboard.review.index')->with('success', 'Review deleted successfully.');
    }
}
