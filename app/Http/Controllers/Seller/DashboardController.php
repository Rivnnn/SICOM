<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        $user = Auth::user();
        
        // Calculate earnings
        $earnings = Order::where('seller_id', $user->id)
            ->where('status', 'completed')
            ->sum('price');
        
        $orderCount = Order::where('seller_id', $user->id)->count();
        $pendingOrders = Order::where('seller_id', $user->id)
            ->where('status', 'pending')
            ->count();
        $completedOrders = Order::where('seller_id', $user->id)
            ->where('status', 'completed')
            ->count();

        return view('seller.dashboard', compact('earnings', 'orderCount', 'pendingOrders', 'completedOrders'));
    }
}
