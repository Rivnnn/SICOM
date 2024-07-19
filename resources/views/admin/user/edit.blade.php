@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Edit User</h1>
        <form action="{{ route('admin.users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-4 mb-4">
                <label for="name" class="text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name"
                    class="w-full p-2 pl-10 text-sm text-gray-700 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $user->name }}" required>
            </div>
            <div class="grid grid-cols-1 gap-4 mb-4">
                <label for="email" class="text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full p-2 pl-10 text-sm text-gray-700 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $user->email }}" required>
            </div>
            <div class="grid grid-cols-1 gap-4 mb-4">
                <label for="role_id" class="text-sm font-medium text-gray-700">Role</label>
                <select name="role_id" id="role_id"
                    class="w-full p-2 pl-10 text-sm text-gray-700 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                            {{ $role->role }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update
                User</button>
        </form>
    </div>
@endsection
