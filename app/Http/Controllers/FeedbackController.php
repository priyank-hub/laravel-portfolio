<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\FeedbackAdd;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::get();
        return Inertia::render('Admin/Feedback/Feedback', [
            'user' => Auth::user(),
            'feedbacks' => $feedbacks->toArray(),
        ]);
    }

    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $user = User::first();

        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'subject' => ['nullable', 'max:255'],
            'message' => ['required'],
        ]);
    
        Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        
        $user->notify(new FeedbackAdd());
        return Redirect::route('admin.feedback.greet');
    }

    public function greet() {
        return Inertia::render('Thankyou');
    }

    public function show(feedback $feedback)
    {
        //
    }

    public function edit(feedback $feedback)
    {
        //
    }

    public function update(Request $request, feedback $feedback)
    {
        //
    }

    public function destroy(feedback $feedback)
    {
        //
    }
}
