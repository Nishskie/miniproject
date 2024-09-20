<?php

use Illuminate\Support\Facades\Route;
use App\Models\Consumer;

Route::get('/', function () {
    return view('welcome');
});

Route::post('consumers', function () {
    // validation...

    Consumer::create([
        'first_name' => request('first_name'),
        'last_name' => request('last_name'),
        'email' => request('email'),
    ]);

    return redirect('/');
});
