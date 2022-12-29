<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('services', [ServiceController::class, 'show'])->name('services');

Route::get('skill', function () {
    return view('skill');
})->name('skill');

Route::get('contact', [ContactController::class, 'show'])->name('contact');
Route::post('contact', [ContactController::class, 'create'])->name('create');


Route::get('projects', function () {
    return view('projects');
})->name('projects');
