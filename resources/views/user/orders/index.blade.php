@extends('layouts.user')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-4">My Orders</h1>
        <a href="{{ route('user.orders.create') }}" class="bg-purple-500 text-white px-4 py-2 rounded">Create Order</a>
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-6 py-4">
                <h2 class="text-xl font-bold mb-2">Order List</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
                        <thead>
                            <tr
                                class="bg-gray-200 text-left text-xs uppercase tracking-wider text-gray-700 align-items-center">
                                <th class="py-2 px-4 border-b border-gray-200">Service</th>
                                <th class="py-2 px-4 border-b border-gray-200">Price</th>
                                <th class="py-2 px-4 border-b border-gray-200">Status</th>
                                <th class="py-2 px-4 border-b border-gray-200">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr class="border-b last:border-b-0">
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $order->service->title }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        Rp.{{ number_format($order->price, 0, ',', '.') }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ ucfirst($order->status) }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('user.orders.edit', $order) }}"
                                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</a>
                                            <form action="{{ route('user.orders.destroy', $order) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
