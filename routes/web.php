<?php

use Illuminate\Support\Facades\Route;
use App\Models\Consumer;
use Illuminate\Http\Request;
use App\Http\Controllers\LinkController;
use App\Models\Links;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/consumers', function (Request $request) {
    // validation...
    $validated = $request->validate([
        'email' => 'required|email|unique:consumers,email',
    ]);


    Consumer::create($validated);
    $consumer = Consumer::latest()->first();
    $email = $consumer->email;
    $email = urlencode($email);

    return redirect()->to("https://buy.stripe.com/3cseWD7awdlW57W5kv?prefilled_email={$email}");
})->name("user-submit");


Route::get('/links', [LinkController::class, 'index'])->name('links.index');

Route::get('/track-click/{linkId}', [LinkController::class, 'trackClick'])->name('track.click');

