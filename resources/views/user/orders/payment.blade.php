@extends('layouts.user')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Payment for Order {{ $order->id }}</h1>
        <form action="{{ route('user.payment.handle', $order) }}" method="POST" id="payment-form">
            @csrf
            <div class="bg-white shadow overflow-hidden sm:rounded-lg p-4">
                <p class="text-gray-700 mb-4">Click the button below to proceed with payment.</p>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Pay with Stripe</button>
            </div>
        </form>
    </div>
@endsection
