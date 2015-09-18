<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::post('/submit', function(Request $request) {
    dd($request);
});
