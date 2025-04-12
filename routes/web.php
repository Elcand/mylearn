<?php

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cache', function () {
    $users = Cache::rememberForever('uses', function () {
        return User::all();
    });
    return view('cache', compact('users'));
});
