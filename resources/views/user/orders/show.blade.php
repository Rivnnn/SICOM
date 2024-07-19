@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Payment Details</h1>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-lg font-semibold">Order Information</h2>
                    <p><strong>Order ID:</strong> {{ $order->id }}</p>
                    <p><strong>Service:</strong> {{ $order->service->title }}</p>
                    <p><strong>Amount:</strong> Rp.{{ number_format($order->price, 2, ',', '.') }}</p>
                    <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold">Payment Information</h2>
                    <p><strong>Payment ID:</strong> {{ $session->id }}</p>
                    <p><strong>Amount Charged:</strong> Rp.{{ number_format($session->amount_total / 100, 2, ',', '.') }}
                    </p>
                    <p><strong>Payment Status:</strong> {{ ucfirst($session->payment_status) }}</p>
                    <p><strong>Payment Method:</strong> {{ ucfirst($session->payment_method_types[0]) }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
