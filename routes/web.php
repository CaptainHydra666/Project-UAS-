<?php

use Illuminate\Support\Facades\Route;

Route::get('/'  , function () {
    return view('welcome');
});

Route::get('/dashboard'  , function () {
    return view('dashboard');
});

Route::get('/admin'  , function () {
    return view('admin-home');
});

Route::get('/adminonly'  , function () {
    return view('adminlogin');
});
