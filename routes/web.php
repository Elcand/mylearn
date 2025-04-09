<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-mail', function () {
    return view('send-mail');
});

Route::post('send-mail', function (Request $request) {
    Mail::raw($request->message, function ($message) use ($request) {
        $message->to($request->email)
        ->subject('Something new')
        ->from('admin@gmail.com', 'Admin😏');
    });

    return redirect()->back();
})->name('send.mail');
