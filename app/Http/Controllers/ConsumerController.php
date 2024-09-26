<?php

// app/Http/Controllers/ConsumerController.php

namespace App\Http\Controllers;

use App\Models\Consumer;
use Illuminate\Http\Request;

class ConsumerController extends Controller
{
    public function index()
    {
        // Retrieve all consumers from the database
        $consumers = Consumer::all();

        // Pass the consumers data to the view
        return view('consumers.index', compact('consumers'));
    }
    public function show($id)
    {
        // Fetch the consumer by ID
        $consumer = Consumer::findOrFail($id); // This will throw a 404 if not found

        // Pass the consumer data to the view
        return view('consumers.show', compact('consumer'));
    }
}
