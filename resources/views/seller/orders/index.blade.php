@extends('layouts.seller')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">My Orders</h1>
        <table class="shadow-md rounded overflow-hidden border-collapse min-w-full bg-white mt-4">
            <thead>
                <tr>
                    <th class="py-2 border-b border-gray-200">Service</th>
                    <th class="py-2 border-b border-gray-200">Client</th>
                    <th class="py-2 border-b border-gray-200">Price</th>
                    <th class="py-2 border-b border-gray-200">Status</th>
                    <th class="py-2 border-b border-gray-200">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td class="py-2 border-b border-gray-200">{{ $order->service->title }}</td>
                        <td class="py-2 border-b border-gray-200">{{ $order->user->name }}</td>
                        <td class="py-2 border-b border-gray-200">${{ $order->price }}</td>
                        <td class="py-2 border-b border-gray-200">{{ ucfirst($order->status) }}</td>
                        <td class="py-2 border-b border-gray-200">
                            <a href="{{ route('seller.orders.show', $order) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 rounded">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
