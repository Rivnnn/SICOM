@extends('layouts.seller')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">My Services</h1>
    <a href="{{ route('seller.services.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Create Service</a>
    <table class="min-w-full bg-white mt-4">
        <thead>
            <tr>
                <th class="py-2">Title</th>
                <th class="py-2">Category</th>
                <th class="py-2">Price</th>
                <th class="py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td class="py-2">{{ $service->title }}</td>
                <td class="py-2">{{ $service->category->name }}</td>
                <td class="py-2">${{ $service->price }}</td>
                <td class="py-2">
                    <a href="{{ route('seller.services.edit', $service) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Edit</a>
                    <form action="{{ route('seller.services.destroy', $service) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
