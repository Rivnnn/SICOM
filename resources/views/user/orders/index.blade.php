@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">My Orders</h1>
    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Service</th>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Freelancer</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach($orders as $order)
            <tr>
                <td class="w-1/3 text-left py-3 px-4">{{ $order->service->title }}</td>
                <td class="w-1/3 text-left py-3 px-4">{{ $order->service->seller->name }}</td>
                <td class="text-left py-3 px-4">{{ $order->status }}</td>
                <td class="text-left py-3 px-4">
                    <a href="#" class="text-blue-500 hover:text-blue-600">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
