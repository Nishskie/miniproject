<?php

use Illuminate\Support\Facades\Route;
use App\Models\Consumer;
use Illuminate\Http\Request;
use App\Http\Controllers\LinkController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('consumers', function (Request $request) {
    // validation...
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:consumers,email',
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
    ]);


    Consumer::create($validated);
    $consumer = Consumer::latest()->first();
    $email = $consumer->email;
    $email = urlencode($email);

    return redirect()->to("https://buy.stripe.com/3cseWD7awdlW57W5kv?prefilled_email={$email}");
});

Route::get('/track-click/{linkId}', [LinkController::class, 'trackClick'])->name('track.click');
