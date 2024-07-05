@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card flex flex-wrap justify-center bg-white rounded shadow-md p-4">
                    <div class="card-header">{{ __('Data service') }}</div>
                    <div class="card-body">
                        <button class="btn btn-base" onclick="location.href='{{ route('service.create') }}'">
                            Create Data
                        </button>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="row">
                        @foreach ($services as $service)
                            <div class="col-md-3">
                                <div class="card mb-4 shadow-sm" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                                    <img src="{{ asset('/' . $service->image) }}" alt="Image"
                                        class="card-img-top img-fluid"
                                        style="height: 150px; width: 100%; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $service->title }}</h5>
                                        <p class="card-text">{{ $service->description }}</p>
                                        <p class="card-text">
                                            <span class="badge text-black ">{{ $service->category->name }}</span>
                                            <span>|</span>
                                            <span class="badge text-black ">Rp. {{ $service->price }}</span>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="{{ route('service.show', $service->id) }}"
                                                class="btn btn-primary">Detail</a>
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href='{{ route('service.edit', $service->id) }}'">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#"
                                                            onclick="if(confirm('Hapus data ini?')) { document.getElementById('delete-form-{{ $service->id }}').submit(); }">Delete</a>
                                                        <form id="delete-form-{{ $service->id }}"
                                                            action="{{ route('service.destroy', $service->id) }}"
                                                            method="post" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection
