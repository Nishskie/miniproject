<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Links;
use App\Models\UserClick;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    public function trackClick($linkId)
    {
        $link = Links::findOrFail($linkId);

        // Log the click
        UserClick::create([
            'user_id' => Auth::id(),
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
