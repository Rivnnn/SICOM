@extends('layouts.seller')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Seller Dashboard</h1>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-xl font-semibold">Total Orders</h2>
                <p class="text-2xl">{{ $orderCount }}</p>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-xl font-semibold">Total Earnings</h2>
                <p class="text-2xl">${{ $earnings }}</p>
            </div>
        </div>
    </div>
@endsection
