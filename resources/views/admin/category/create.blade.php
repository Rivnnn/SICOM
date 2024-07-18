@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h1>Form Tambah kategori</h1>
                <a href="{{ route('category.index') }}">Back</a>
            </div>
            <form method="POST" action="{{ route('category.store') }}" class="form">
                @csrf
                <div class="form-group">
                    <label for="name">
                        <span><sup>*</sup></span> Nama kategori
                    </label>
                    <div class="input-container">
                        <input type="text" name="name" id="name" placeholder="Masukan Nama"
                            value="{{ old('name') }}">
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
