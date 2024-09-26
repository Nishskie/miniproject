<?php

use Illuminate\Support\Facades\Route;
use App\Models\Consumer;
use Illuminate\Http\Request;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\AdminController;
use App\Models\Links;
use App\Http\Controllers\PaymentLinkController;

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

    $data =
    [
        'email' => $consumer->email,
        'time' => $consumer->created_at,
    ];

    //$jsonData = json_encode($data);

    $headers = [
        'Content-Type' => 'application/json',
        'Authorization' => env('WEBHOOK_KEY'), // Fetch WEBHOOK_KEY from the .env file
    ];

    $response = Http::withHeaders($headers)->post('https://webinarconnect.ai/webhooks/link-tracker', $data);

    //dd(json_decode($response, true));
    // Handle the response if needed
    if ($response->successful()) {
        return redirect()->to("https://buy.stripe.com/3cseWD7awdlW57W5kv?prefilled_email={$email}");
    } else {
        return response()->json(['error' => 'Failed to send webhook'], 500);
    }
})->name('user-submit');

Route::get('/links', [LinkController::class, 'index'])->name('links.index');

Route::get('/track-click/{linkId}', [LinkController::class, 'trackClick'])->name('track.click');

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.submit');

// routes/web.php

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

