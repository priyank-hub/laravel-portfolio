<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        return Inertia::render('Admin/Analytics', [
            'user' => Auth::user(),
        ]);
    }

    public function feedback() {
        return Inertia::render('Admin/Feedback', [
            'user' => Auth::user(),
        ]);
    }

    public function projects() {
        return Inertia::render('Admin/Projects', [
            'user' => Auth::user(),
        ]);
    }

    public function profile() {
        return Inertia::render('Admin/Profile', [
            'user' => Auth::user(),
        ]);
    }
}
