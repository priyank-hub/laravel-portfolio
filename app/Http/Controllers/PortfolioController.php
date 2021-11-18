<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    //
    public function index() {
        return Inertia::render('Introduction');
    }

    public function about() {
        return Inertia::render('AboutMe');
    }

    public function skills() {
        return Inertia::render('Skills');
    }

    public function works() {
        return Inertia::render('Works');
    }

    public function contact() {
        return Inertia::render('Contact');
    }
}
