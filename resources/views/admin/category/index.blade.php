@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Manage Categories</h1>
        <a href="{{ route('category.create') }}" class="btn btn-success">Tambah Data</a>
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                </tr>
            </thead>
            <tbody class=" text-black">
                @foreach ($category as $category)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-1/3 text-left py-3 px-4">{{ $category->name }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('category.edit', $category->id) }}"
                                class="text-blue-500 hover:text-blue-60cls0">Edit</a>
                            <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                class="inline-table" onsubmit="return confirm('Hapus data ini ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
