<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/expense', 'ExpenseController@index');
Route::post('/expense', 'ExpenseController@store');
Route::delete('/expense/{id}', 'ExpenseController@destroy');