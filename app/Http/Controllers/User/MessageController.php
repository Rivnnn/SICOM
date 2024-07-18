<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Message::where('from_user_id', Auth::id())
            ->orWhere('to_user_id', Auth::id())
            ->get();

        return view('user.messages.index', compact('messages'));
    }

    public function create()
    {
        return view('user.messages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'to_user_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ]);

        Message::create([
            'from_user_id' => Auth::id(),
            'to_user_id' => $request->to_user_id,
            'content' => $request->content,
        ]);

        return redirect()->route('user.messages.index')->with('success', 'Message sent successfully.');
    }

    public function show(Message $message)
    {
        $this->authorize('view', $message);
        return view('user.messages.show', compact('message'));
    }
}
