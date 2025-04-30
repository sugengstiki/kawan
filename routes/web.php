<?php

use App\Livewire\AddTeman;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ada');
});

Route::get('/hitung', Counter::class);
Route::get('/add', AddTeman::class);
