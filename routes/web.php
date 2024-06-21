<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ManageBranchController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {

    $guard = Auth::guard();
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('cms/dashboard2', function () {

    $data = [
        [
            'name' => 'Sales',
            'data' => [65, 59, 80, 81, 56, 55, 40]
        ]
    ];

    $options = [
        'chart' => [
            'height' => 350,
            'type' => 'line'
        ],
        'xaxis' => [
            'categories' => ['January', 'February', 'March', 'April', 'May', 'June', 'July']
        ]
    ];

    return Inertia::render('Dashboard2', ['chartData' => $data, 'chartOptions' => $options]);


   
    // return Inertia::render('Dashboard2');
})->middleware(['auth'])->name('dashboard2');

Route::group(['prefix' => 'cms'], function () {
    Route::resource('branch', BranchController::class);
    Route::resource('managebranch', ManageBranchController::class);
});

Route::get('/search', function () {
    return Inertia::render('Guest/SearchService');
})->name('search');

Route::get('/services', function () {
    return Inertia::render('Guest/Services');
})->name('services');

Route::get('/service/{service_id}', function ($service_id) {
    return Inertia::render('Guest/Service');
})->name('service');

Route::get('/service/1/booking', function () {
    return Inertia::render('Guest/Booking');
})->name('booking');

Route::get('/services/history', function () {
    return Inertia::render('Guest/ServicesHistory');
})->name('service.history');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
