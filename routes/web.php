<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cache', function () {
    Cache::put('post', 'post  title one', $second = 5);
    $value =  Cache::get('post');

    dd($value);
});
