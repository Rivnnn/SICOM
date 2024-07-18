@extends('layouts.user')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Send Message</h1>
    <form action="{{ route('user.messages.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="to_user_id" class="block text-sm font-medium text-gray-700">To</label>
            <select name="to_user_id" id="to_user_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea name="content" id="content" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
        </div>
        <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded">Send Message</button>
    </form>
</div>
@endsection
