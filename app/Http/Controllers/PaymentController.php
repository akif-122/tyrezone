<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
public function index()
{
return view('payment'); // Create a view for payment form
}
public function process(Request $request)
{
// Validate the Stripe token
    $request->validate([
        'stripeToken' => 'required',
    ]);

    // Set your Stripe secret key
    Stripe::setApiKey(env('STRIPE_SECRET'));

    // Amount to be charged (in cents)
    $amount = 5000; // Example: charge $50.00

    try {
        // Create a charge
        Charge::create([
            'amount' => $amount,
            'currency' => 'usd',
            'description' => 'Payment Description',
            'source' => $request->stripeToken,
        ]);

        // Payment successful
        return redirect()->route('home')->with('success', 'Payment successful!');

    } catch (\Exception $e) {
        // Handle the error
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}
}