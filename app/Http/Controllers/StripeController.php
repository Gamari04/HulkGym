<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StripeController extends Controller
{
 public function session(Request $request)
{
    \Stripe\Stripe::setApiKey(config('stripe.sk'));

    $unitAmount = max(50, 100) * 100; // Convert base price to cents

    $session = \Stripe\Checkout\Session::create([
        'line_items' => [
            [
                'price_data' => [
                    'currency' => 'usd', // Assuming USD, adjust if needed
                    'product_data' => [
                        'name' => 'Product Ticket', // Descriptive name
                        'description' => 'Your product description here', // Provide details
                    ],
                    'unit_amount' => $unitAmount,
                ],
                'quantity' => $request->input('quantity', 1), // Allow quantity adjustment
            ],
        ],
        'mode' => 'payment',
        'success_url' => route('success'),
    ]);

    return redirect()->to($session->url);
}


    public function success(Request $request)
    {
       echo 'success';

    }
}
