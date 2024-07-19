<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // Get the count of orders for the authenticated user
        $orderCount = Order::where('user_id', Auth::id())->count();

        return view('user.dashboard', compact('orderCount'));
    }
}

