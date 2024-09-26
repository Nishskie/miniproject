<?php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Consumer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Admin index page
    public function index()
    {
        // Example: Manually ensure user is an admin, instead of relying on Kernel.php
        if (Auth::user() && Auth::user()->is_admin) {
            return view('admin.dashboard'); // Render admin page view
        }

        return redirect('/')->with('error', 'Unauthorized access');
    }

    public function dashboard()
    {

        $consumers = Consumer::all();
        // Return the admin dashboard view
        return view('admin.dashboard', compact('consumers')); // Ensure this view exists
    }
}

