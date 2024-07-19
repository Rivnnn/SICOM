<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('user.orders.index', compact('orders'));
    }

    public function create()
    {
        $services = Service::all();
        return view('user.orders.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'price' => 'required|numeric',
        ]);

        Order::create([
            'service_id' => $request->service_id,
            'user_id' => Auth::id(),
            'seller_id' => Service::find($request->service_id)->user_id,
            'status' => 'pending',
            'price' => $request->price,
        ]);

        return redirect()->route('user.orders.index')->with('success', 'Order created successfully.');
    }

    public function edit(Order $order)
    {
        $this->authorize('update', $order);
        $services = Service::all();
        return view('user.orders.edit', compact('order', 'services'));
    }

    public function update(Request $request, Order $order)
    {
        $this->authorize('update', $order);

        $request->validate([
            'service_id' => 'required|exists:services,id',
            'price' => 'required|numeric',
        ]);

        $order->update([
            'service_id' => $request->service_id,
            'price' => $request->price,
        ]);

        return redirect()->route('user.orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        $this->authorize('delete', $order);
        $order->delete();
        return redirect()->route('user.orders.index')->with('success', 'Order deleted successfully.');
    }
}
