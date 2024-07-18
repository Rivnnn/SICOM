@extends('layouts.seller')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Order Details</h1>
        <div class="bg-white p-4 rounded shadow">
            <p><strong>Service:</strong> {{ $order->service->title }}</p>
            <p><strong>Client:</strong> {{ $order->user->name }}</p>
            <p><strong>Price:</strong> ${{ $order->price }}</p>
            <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
            <form action="{{ route('seller.orders.updateStatus', $order) }}" method="POST" class="mt-4">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="in_progress" {{ $order->status == 'in_progress' ? 'selected' : '' }}>In Progress
                        </option>
                        <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update Status</button>
            </form>
        </div>
    </div>
@endsection
