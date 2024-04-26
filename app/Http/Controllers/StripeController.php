<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function session(Request $request, $productId)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $product = Product::findOrFail($productId);
        $price = $product->price;
        $request->session()->put('productId', $productId);

        $unitAmount = max(50, 100) * $price;
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd', // Assuming USD, adjust if needed
                        'product_data' => [
                            'name' => $product->name, // Descriptive name
                            'description' => $product->description,

                        ],
                        'unit_amount' => $unitAmount,
                    ],
                    'quantity' => $request->input('quantity', 1), // Allow quantity adjustment
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success', ['productId' => $productId]),
        ]);

        return redirect()->to($session->url);
    }


    public function success(Request $request, $productId)
    {
        $productId = $request->session()->get('productId');
        $product = Product::findOrFail($productId);
        $product = Product::findOrFail($productId);
        ProductUser::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id
        ]);
        $product->decrement('quantity');
        $product->save();

        return redirect('/products')->with('success', 'payment successfully');
    }
}
