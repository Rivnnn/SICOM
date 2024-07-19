<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $orders = Order::where('seller_id', Auth::id())->get();
        return view('seller.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('seller.orders.show', compact('order'));
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        
        $request->validate([
            'status' => 'required|string|in:pending,in progress,completed,cancelled',
        ]);

        // Update the order status
        $order->status = $request->status;
        $order->save();
        return redirect()->route('seller.orders.index')->with('success', 'Order status updated successfully.');
    }
}
