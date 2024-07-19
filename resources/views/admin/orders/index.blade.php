@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Orders</h1>
    <table class="min-w-full bg-white mt-4">
        <thead>
            <tr>
                <th class="py-2">Service</th>
                <th class="py-2">Client</th>
                <th class="py-2">Price</th>
                <th class="py-2">Status</th>
                <th class="py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td class="py-2">{{ $order->service->title }}</td>
                <td class="py-2">{{ $order->client->name }}</td>
                <td class="py-2">${{ $order->price }}</td>
                <td class="py-2">{{ ucfirst($order->status) }}</td>
                <td class="py-2">
                    <a href="{{ route('admin.orders.show', $order) }}" class="bg-blue-500 text-white px-2 py-1 rounded">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
