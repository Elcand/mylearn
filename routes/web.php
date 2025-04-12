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

    // $users = Cache::pull('users');

    // $users = null;

    if(Cache::has('users')){
        dd('data is cache');
    }
    return view('cache', compact('users'));
});
