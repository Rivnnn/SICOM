@extends('layouts.user')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Review for Order #{{ $order->id }}</h1>
        <form action="{{ route('review.store', $order) }}" method="POST">
            @csrf
            <div class="bg-white shadow overflow-hidden sm:rounded-lg p-4">
                <div class="mb-4">
                    <label for="rating" class="block text-sm font-medium text-gray-700">Rating (1-5)</label>
                    <input type="number" id="rating" name="rating" min="1" max="5" required
                        class="mt-1 p-2 border border-gray-300 rounded-md">
                    @error('rating')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="comment" class="block text-sm font-medium text-gray-700">Comment</label>
                    <textarea id="comment" name="comment" rows="4" class="mt-1 p-2 border border-gray-300 rounded-md"></textarea>
                    @error('comment')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit Review</button>
            </div>
        </form>
    </div>
@endsection
