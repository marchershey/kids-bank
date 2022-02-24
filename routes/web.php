<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name('parents.')->prefix('parents')->group(function () {
    // Route::get('/', )
});
