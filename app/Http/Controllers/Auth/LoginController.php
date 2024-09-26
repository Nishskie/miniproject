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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect to admin dashboard on successful login
            $user = Auth::user();
            if ($user->is_admin) {
                // Redirect to admin dashboard on successful login
                return redirect()->route('admin.dashboard');
            }
            
        }

        // If login fails, redirect back with error
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }
}
