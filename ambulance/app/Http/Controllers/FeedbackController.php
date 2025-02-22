<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;


class FeedbackController extends Controller
{
    // Store the feedback data
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Create a new feedback record
        Feedback::create($validated);

        // Redirect back to the welcome page with a success message
        return redirect()->route('welcome')->with('success', 'Thank you for your feedback!');
    }

    public function index()
    {
        // Fetch the latest 3 feedbacks
        $feedbacks = Feedback::latest()->take(3)->get();

        // Pass feedbacks to the welcome page (or any other view)
        return view('welcome', compact('feedbacks'));
    }


}
