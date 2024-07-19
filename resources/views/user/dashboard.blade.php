@extends('layouts.user')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">User Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-lg font-semibold">Order Statistics</h2>
                <p class="text-gray-600">Total Orders: {{ $orderCount }}</p>
            </div>
            <!-- Add more cards here for additional statistics or information -->
        </div>
    </div>
@endsection
