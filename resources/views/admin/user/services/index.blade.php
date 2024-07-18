@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Browse Services</h1>
    <div class="grid grid-cols-3 gap-4">
        @foreach($services as $service)
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold">{{ $service->title }}</h2>
            <p>{{ $service->description }}</p>
            <p class="text-gray-500">{{ $service->price }}</p>
            <a href="#" class="text-blue-500 hover:text-blue-600">Order</a>
        </div>
        @endforeach
    </div>
</div>
@endsection
