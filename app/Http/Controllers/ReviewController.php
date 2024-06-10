<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.review', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'user' => 'required',
            'rate' => 'required',
            'date' => 'required',
    ]);

    Review::create($validatedData);

    return redirect('/reviews')->with('success', 'Review added successfully!');
}

    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'user' => 'required',
            'rate' => 'required',
            'date' => 'required',
        ]);

        $review->update($validatedData);

        return redirect('/reviews')->with('success', 'Review edit successfully!');
    }

    public function destroy(Review $review)
        {
            $review->delete();
            return redirect('/reviews')->with('success', 'Review deleted successfully!');
        }
}
