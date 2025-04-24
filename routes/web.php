<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home'); // 'pages' adalah nama folder, 'home' adalah nama file Blade (tanpa .blade.php)
})->name('home');
