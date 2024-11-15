<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User; // Ensure this line is added

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/greeting', function () {
    return response()->json([
        'message' => 'Hello World json',
        'status' => 'success',
        'code' => 200
    ]);
    
});
