@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Reviews</h1>
        <table class="min-w-full bg-white mt-4">
            <thead>
                <tr>
                    <th class="py-2">Service</th>
                    <th class="py-2">Client</th>
                    <th class="py-2">Rating</th>
                    <th class="py-2">Comment</th>
                    <th class="py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                    <tr>
                        <td class="py-2">{{ $review->service->title }}</td>
                        <td class="py-2">{{ $review->client->name }}</td>
                        <td class="py-2">{{ $review->rating }}</td>
                        <td class="py-2">{{ $review->comment }}</td>
                        <td class="py-2">
                            <form action="{{ route('admin.reviews.destroy', $review) }}" method="POST" class="inline">
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
