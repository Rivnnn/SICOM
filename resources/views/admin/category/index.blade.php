@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Category</h1>
        <a href="{{ route('admin.category.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Create Category</a>
        <table
            class="shadow-md rounded overflow-hidden border-collapse min-w-full text-sm text-left rtl:text-right bg-white mt-4">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $category)
                    <tr>
                        <td scope="col" class="px-6 py-3">{{ $category->name }}</td>
                        <td scope="col" class="px-6 py-3">
                            <a href="{{ route('admin.category.edit', $category) }}"
                                class="bg-blue-500 text-white px-2 py-1 rounded">Edit</a>
                            <form action="{{ route('admin.category.destroy', $category) }}" method="POST" class="inline">
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
