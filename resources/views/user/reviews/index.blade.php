@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">My Reviews</h1>
    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Service</th>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Rating</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Comment</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach($reviews as $review)
            <tr>
                <td class="w-1/3 text-left py-3 px-4">{{ $review->service->title }}</td>
                <td class="w-1/3 text-left py-3 px-4">{{ $review->rating }}</td>
                <td class="text-left py-3 px-4">{{ $review->comment }}</td>
                <td class="text-left py-3 px-4">
                    <a href="#" class="text-blue-500 hover:text-blue-600">Edit</a>
                    <form action="#" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-600">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
