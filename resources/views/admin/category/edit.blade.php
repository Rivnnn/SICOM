@extends('layouts.admin')
@section('content')
    <div class="container mx-auto py-3">
        <div class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="form-header">
                <h1 class="text-2xl font-bold mb-2">Form Edit Category</h1>
                <a href="{{ route('admin.category.index') }}" class="text-blue-600 hover:text-blue-900">Back</a>
            </div>
            <form action="{{ route('admin.category.update', $category->id) }}" method="post" class="form">
                @csrf
                @method('PATCH')
                <div class="form-group mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                        <span><sup></sup></span> Nama Kategori
                    </label>
                    <div class="input-container">
                        <input type="text" name="name" id="name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Masukkan Nama Kategori" value="{{ $category->name }}">
                        @error('name')
                            <span class="text-red-500 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
