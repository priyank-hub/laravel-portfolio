<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    //
    public function index() {
        return Inertia::render('Home');
    }
}
