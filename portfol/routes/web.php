<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');
Route::view('/contact', 'contact');
Route::view('/gallery', 'gallery');
Route::view('/journal', 'journal');