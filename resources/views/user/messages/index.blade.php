@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Messages</h1>
    <div class="bg-white p-6 rounded shadow">
        <ul>
            @foreach($messages as $message)
            <li class="mb-4">
                <div class="text-gray-800">{{ $message->content }}</div>
                <div class="text-gray-500 text-sm">{{ $message->fromUser->name }} - {{ $message->created_at->diffForHumans() }}</div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
