<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function show(Order $order)
    {
        return view('user.orders.payment', compact('order'));
    }

    public function handlePayment(Request $request, Order $order)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Charge::create([
            'amount' => 100, 
            'currency' => 'Rp.',
            'description' => 'Order payment',
        ]);
    
        $order->transactions()->create([
            'amount' => $order->price,
            'payment_method' => 'card',
            'status' => 'paid',
        ]);
    
        $order->update(['status' => 'completed']);
    
        return redirect()->route('user.orders.index')->with('success', 'Payment successful!');
    }

}
