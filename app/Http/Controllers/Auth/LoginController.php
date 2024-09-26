<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // Return the login view
    }

    public function login(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        Auth::attempt($validated);

        if(Auth::check()){

            return redirect()->route("admin.dashboard");

        }

        // If login fails, redirect back with error
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }
}
