<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $orderCount = Service::where('user_id', Auth::id())->count();
        return view('user.dashboard',compact('orderCount'));
    }
}
