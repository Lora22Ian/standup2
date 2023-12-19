<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }
public function session()
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        // Obține produsele din coș
        $cartItems = session('cart');

        // Construiește array-ul de linii pentru checkout
        $lineItems = [];
        foreach ($cartItems as $id => $details) {
            $lineItems[] = [
                'price_data' => [
                    'currency'     => 'eur',
                    'product_data' => [
                        'name' => $details['name'],
                    ],
                    'unit_amount'  => $details['price'] * 100, // Convertim în cenți
                ],
                'quantity'   => $details['quantity'],
            ];
        }

        // Crează sesiunea de checkout
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => $lineItems,
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }
    public function success()
{
    // Display success message
    $message = "Thanks for your order. You have just completed your payment. The seller will reach out to you as soon as possible!";
 
    // Redirect to the "/ticket" route
    return redirect('/home')->with('success_message', $message);
}
}
