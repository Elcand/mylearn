<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        // return response()->json([
        //     'name' => 'Epan',
        //     'state' => 'Lampung'
        // ]); // json

        return response()->file(public_path('uploads/cat-memes.jpeg'));
    }

    function create()
    {
        // return redirect()->back();
    }
}
