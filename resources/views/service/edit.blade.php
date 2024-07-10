@extends('layouts.app')
@section('content')
    <div class="container-fluid py-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header text-black">
                        <h1>Update Data Service</h1>
                        <a href="{{ route('service.index') }}" class="btn btn-secondary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('service.update', ['service' => $service->id]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Title
                                    <span></span></label>
                                <div class="col-md-6">
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Masukkan Title" value="{{ $service->title }}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-right">Price
                                    <span></span></label>
                                <div class="col-md-6">
                                    <input type="number" name="price" id="price" class="form-control"
                                        placeholder="Masukkan Price" value="{{ $service->price }}">
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description
                                    <span></span></label>
                                <div class="col-md-6">
                                    <textarea name="description" id="description" class="form-control" placeholder="Masukkan Description">{{ $service->description }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Image
                                    <span></span></label>
                                <div class="col-md-6">
                                    <input type="file" name="image" id="image" class="form-control"
                                        placeholder="Masukkan Image">
                                    @if ($service->image)
                                        <img src="{{ asset('images/' . $service->image) }}" alt="Service Image"
                                            width="100">
                                    @endif
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="category_id" class="col-md-4 col-form-label text-md-right">Category
                                    <span></span></label>
                                <div class="col-md-6">
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">Pilih Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $service->category_id == $category->id ? 'elected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="form-group row mb-3">
                                <label for="user_id" class="col-md-4 col-form-label text-md-right">User
                                    <span></span></label>
                                <div class="col-md-6">
                                    <select name="user_id" id="user_id" class="form-control">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ $service->user_id == $user->id ? 'elected' : '' }}>{{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
