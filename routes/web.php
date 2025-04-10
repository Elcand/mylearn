<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('session', function (Request $request) {
    // $request->session()->put('foo', ['php', 'laravel', 'vue']);
    session(['test' => 'bar']);
    return view('session');
});
