@extends('layouts.seller')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">My Services</h1>
        <a href="{{ route('seller.services.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Create Service</a>
        <table
            class="shadow-md rounded overflow-hidden border-collapse min-w-full text-sm text-left rtl:text-right bg-white mt-4">
            <thead>
                <tr>
                    <th class="px-6 py-4 bg-gray-100 border-b border-gray-200">Title</th>
                    <th class="px-6 py-4 bg-gray-100 border-b border-gray-200">Category</th>
                    <th class="px-6 py-4 bg-gray-100 border-b border-gray-200">Price</th>
                    <th class="px-6 py-4 bg-gray-100 border-b border-gray-200">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $service->title }}</td>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $service->category->name }}</td>
                        <td class="px-6 py-4 border-b border-gray-200">${{ $service->price }}</td>
                        <td class="px-6 py-4 border-b border-gray-200">
                            <a href="{{ route('seller.services.edit', $service) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 rounded">Edit</a>
                            <form action="{{ route('seller.services.destroy', $service) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white px-2 py-1 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
