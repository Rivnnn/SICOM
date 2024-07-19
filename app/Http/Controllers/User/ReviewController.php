<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function create(Order $order)
    {
        return view('user.reviews.create', compact('order'));
    }

    public function store(Request $request, Order $order)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        Review::create([
            'order_id' => $order->id,
            'client_id' => Auth::id(),
            'freelancer_id' => $order->freelancer_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->route('user.orders.index')->with('success', 'Review submitted successfully!');
    }
}
