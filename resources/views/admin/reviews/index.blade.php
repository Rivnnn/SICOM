@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Manage Reviews</h1>
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Client</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Freelancer</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Rating</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Comment</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($reviews as $review)
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4">{{ $review->client->name }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $review->freelancer->name }}</td>
                        <td class="text-left py-3 px-4">{{ $review->rating }}</td>
                        <td class="text-left py-3 px-4">{{ $review->comment }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
