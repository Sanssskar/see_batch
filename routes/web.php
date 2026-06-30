<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'home'])->name('home');

Route::get('/about-us-code',[PageController::class,'about'])->name('about');

Route::get('/service',[PageController::class,'service'])->name('service');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::post('/contact/store',[PageController::class,'contact_store'])->name('contact.store');
// Home
// About
// Service
// Team
// Projects
// Blogs
// Contact
