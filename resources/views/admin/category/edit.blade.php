@extends('layouts.app')
@section('content')
    <div class="container mx-auto py-3">
        <div class="form-container">
            <div class="form-header">
                <h1>Form Edit category</h1>
                <a href="{{ route('category.index') }}">Back</a>
            </div>
            <form action="{{ route('category.update', $category->id) }}" method="post" class="form">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">
                        <span><sup>*</sup></span> Nama Kategori
                    </label>
                    <div class="input-container">
                        <input type="text" name="name" id="name" class="border py-2 px-1"
                            placeholder="Masukkan Nama Kategori" value="{{ $category->name }}">
                        @error('name')
                            <span class="invalid">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
