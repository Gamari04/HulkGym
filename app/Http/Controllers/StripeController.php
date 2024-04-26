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
        $totalPrice=$price*$request->quantity;
        $unitAmount = max(50, 100) * $totalPrice;
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
                    'quantity' => $request->quantity, // Allow quantity adjustment
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success', [
                'user_id' => $request->user_id,
                'productId' => $productId,
                'quantity'=>$request->quantity,
                'total_amount'=>$product->price*$request->quantity,
        ]),
        ]);

        return redirect()->to($session->url);
    }


    public function success(Request $request, $productId)
    {
        $productId = $request->session()->get('productId');
        $product = Product::findOrFail($productId);
        $product = Product::findOrFail($productId);
        ProductUser::create([
            'user_id' => $request->user_id,
            'product_id' => $product->id,
            'quantity'=>$request->quantity,
                'total_amount'=>$product->price*$request->quantity,
        
        ]);
        $product->quantity-=$request->quantity;
        $product->save();

        return redirect('/')->with('success', 'payment successfully');
    }
}
