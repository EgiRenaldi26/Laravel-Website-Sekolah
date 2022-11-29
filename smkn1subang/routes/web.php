<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;

Route::redirect('/', '/home');
Route::get('/home',[HomeC::class, 'index']);
Route::get('/tentang',[HomeC::class, 'tentang']); 
Route::get('/pesertadidik',[HomeC::class, 'pesertadidik']); 
Route::get('/eskul',[HomeC::class, 'eskul']);
