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
    $input = $request->all();
    $clean_name = str_replace(" ", "-", $input['name']);
    $file_name = $clean_name.'-'.date('Y-m-d-H:i:s').'.html';

    Storage::disk('local')->put($file_name, $input['html']);
    $submission = Storage::disk('local')->get($file_name);
    Storage::disk('dropbox')->put($file_name, $submission);

    return "Boom! You did it.";
});

Route::get('/storage-test', function(){
    //Storage::disk('local')->put('file.txt', 'Hello From Laravel');

    $testFile = Storage::disk('local')->get('file.txt');
    Storage::disk('dropbox')->put('file.txt', $testFile);
    return "Done!";
});