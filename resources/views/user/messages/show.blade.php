@extends('layouts.user')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">View Message</h1>
    <div class="bg-white p-4 rounded shadow">
        <p><strong>From:</strong> {{ $message->fromUser->name }}</p>
        <p><strong>To:</strong> {{ $message->toUser->name }}</p>
        <p><strong>Content:</strong> {{ $message->content }}</p>
    </div>
</div>
@endsection
