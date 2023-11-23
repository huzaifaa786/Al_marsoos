<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;

class PaymentController extends Controller
{
    public function stripePost(Request $request)
    {   
        Stripe\Stripe::setApiKey('sk_test_51NfGDNFZEUu3XhaudVDMcJ0e7De6p2C4vPnY5ffiatNlEun5HnRcjvUkgyPYVc6wRzyjunuOkMfxaGnmriMownuD00FqPtwOwd');
        Stripe\Charge::create([
            "amount" => $request->input('amount') * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "test from Tritec"
        ]);
        return back();
    }
}
