<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentTestController;
use App\Http\Controllers\LifeCycleTestController;

Route::get('/', function () {
    return view('user.welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('user.dashboard');

Route::middleware('auth:users')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('component-test1', [ComponentTestController::class, 'showComponent1']);
Route::get('component-test2', [ComponentTestController::class, 'showComponent2']);
Route::get('servicecontainertest', [LifeCycleTestController::class, 'showServiceContainer']);
Route::get('serviceprovidertest', [LifeCycleTestController::class, 'showServiceProvider']);


require __DIR__.'/auth.php';
