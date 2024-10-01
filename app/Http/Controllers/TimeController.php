<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Links;
use App\Models\ConsumerClick;
use App\Models\Consumer;
use Illuminate\Support\Facades\Auth;

class TimeController extends Controller
{
    public function showCountdown()
    {
        // Get tomorrow's date in GMT+8 and set the time to 12:00 AM
        $tomorrowMidnightGmt8 = Carbon::now('Asia/Shanghai')->addDay()->startOfDay();

        // Pass the time to the view
        return view('welcome', ['tomorrowMidnightGmt8' => $tomorrowMidnightGmt8->timestamp * 1000]); // Multiply by 1000 to convert to milliseconds
    }
}
