<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Home', ['test' => 'working']);
// });


//analytics
Route::get('/analytics', [DashboardController::class, 'index'])
    ->name('admin.analytics')
    ->middleware('auth');

// feedback
Route::get('/feedback', [FeedbackController::class, 'index'])
->name('admin.feedback')
->middleware('auth');

Route::post('/feedback', [FeedbackController::class, 'store'])
->name('admin.feedback.store');

Route::get('/feedback/greet', [FeedbackController::class, 'greet'])
->name('admin.feedback.greet');

// projects
Route::get('/projects', [ProjectController::class, 'index'])
->name('admin.projects')
->middleware('auth');

Route::get('/projects/create', [ProjectController::class, 'create'])
->name('admin.projects.create')
->middleware('auth');

Route::post('projects', [ProjectController::class, 'store'])
    ->name('admin.projects.store')
    ->middleware('auth');

// profile
Route::get('/profile', [DashboardController::class, 'profile'])
->name('admin.profile')
->middleware('auth');

//portfolio routes
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/works', [PortfolioController::class, 'works'])->name('works');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('admin.login');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('admin.register');

Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');




