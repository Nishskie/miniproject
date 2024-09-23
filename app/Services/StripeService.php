<?php

namespace App\Services;

use Stripe\StripeClient;

class StripeService
{
    protected $stripe;

    public function __construct()
    {
        $this->stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
    }

    public function getPaymentLinks($limit = 100) // Increase limit if needed
    {
        return $this->stripe->paymentLinks->all(['limit' => $limit]);
    }
}
