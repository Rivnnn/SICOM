@extends('layouts.user')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">My Orders</h1>
        <div class="mb-2">
            <a href="{{ route('user.orders.create') }}"
                class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Create Order</a>
        </div>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Service</th>
                        <th class="px-4 py-2 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Price</th>
                        <th class="px-4 py-2 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Status</th>
                        <th
                            class="px-4 py-2 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                        <th
                            class="px-4 py-2 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Payment</th>
                        <th
                            class="px-4 py-2 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Review</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td class="px-4 py-2 whitespace-no-wrap">{{ $order->service->title }}</td>
                            <td class="px-4 py-2 whitespace-no-wrap">Rp.{{ $order->price }}</td>
                            <td class="px-4 py-2 whitespace-no-wrap">{{ ucfirst($order->status) }}</td>
                            <td class="px-4 py-2 whitespace-no-wrap">
                                <a href="{{ route('user.orders.edit', $order) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Edit</a>
                                <form action="{{ route('user.orders.destroy', $order) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 rounded">Delete</button>
                                </form>
                            </td>
                            <td class="px-4 py-2 whitespace-no-wrap">
                                @if ($order->status === 'pending')
                                    <a href="{{ route('user.payment.show', $order) }}"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">Pay</a>
                                @else
                                    Paid
                                @endif
                            </td>
                            <td class="px-4 py-2 whitespace-no-wrap">
                                @if ($order->status === 'completed' && !$order->review)
                                    <a href="{{ route('review.create', $order) }}"
                                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-2 rounded">Review</a>
                                @elseif ($order->review)
                                    Reviewed
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
