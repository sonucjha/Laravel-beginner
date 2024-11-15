<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    $users = ['Alice', 'Bob', 'Charlie'];
    return view('welcome', ['users' => $users]);
});

Route::get('/', function () {
    return view('child');
});

Route::get('/greeting', function () {
    return response()->json([
        'message' => 'Hello World json',
        'status' => 'success',
        'code' => 200
    ]);
    
});
