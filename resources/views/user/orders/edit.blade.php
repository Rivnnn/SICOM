@extends('layouts.user')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Order</h1>
        <form action="{{ route('user.orders.update', $order) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="service_id" class="block text-sm font-medium text-gray-700">Service</label>
                <select name="service_id" id="service_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}" {{ $order->service_id == $service->id ? 'selected' : '' }}>
                            {{ $service->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" name="price" id="price" value="{{ $order->price }}" step="0.01"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded">Update Order</button>
        </form>
    </div>
@endsection
