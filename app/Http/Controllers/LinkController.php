<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Links;
use App\Models\ConsumerClick;
use App\Models\Consumer;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    public function trackClick($linkId)
    {
        $link = Links::findOrFail($linkId);
        $consumer = Consumer::latest()->first();
        $id = $consumer->id;

        // Log the click
        ConsumerClick::create([
            'consumer_id' => $id,
            'link_id' => $link->id,
        ]);

        return redirect()->to($link->url);
    }

    public function index()
    {
        $links = Links::all();
        return view('links', compact('links'));
    }
}
