<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Service;
use App\Models\User;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $userCount = User::count();
        $serviceCount = Service::count();
        $orderCount = Order::count();

        return view('admin.dashboard', compact('userCount', 'serviceCount', 'orderCount'));
    }
    
}
