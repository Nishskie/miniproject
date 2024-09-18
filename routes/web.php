<?php

use Illuminate\Support\Facades\Route;
use App\Models\Consumer;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('consumers', function (Request $request) {
    // validation...

    /*Consumer::create([
        'first_name' => request('first_name'),
        'last_name' => request('last_name'),
        'email' => request('email'),
    ]);
    */

    $validated = $request->validate([
        "email" => ['email', 'required'],
    ]);

    $validated["email"] = urlencode($validated["email"]);

    return redirect()->to("https://buy.stripe.com/3cseWD7awdlW57W5kv?prefilled_email={$validated["email"]}");
});


Route::get("/testing/{email}", function (String $email){
    
});