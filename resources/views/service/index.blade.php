@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                    <table class="responsive-table w-full border">
                        <thead class="bg-gray-200 h-10">
                            <tr class="border">
                                <th class="border border-white text-center">No</th>
                                <th class="border border-white text-center">Name</th>
                                <th class="border border-white text-center">Title</th>
                                <th class="border border-white text-center">Description</th>
                                <th class="border border-white text-center">Image</th>
                                <th class="border border-white text-center">Price</th>
                                <th class="border border-white text-center">Category</th>
                                <th class="border border-white text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $index => $service)
                                <tr class="border">
                                    <td class="border text-center">{{ $index + 1 }}</td>
                                    <td class="border text-center">{{ $service->user->name }}</td>
                                    <td class="border text-center">{{ $service->title }}</td>
                                    <td class="border text-center">{{ $service->description }}</td>
                                    <td class="border text-center">
                                        <img src="{{ asset('/' . $service->image) }}" alt="Image" width="50"
                                            height="50">
                                    </td>
                                    <td class="border text-center">{{ $service->price }}</td>
                                    <td class="border text-center">{{ $service->category->name }}</td>
                                    <td class="border text-center">
                                        <div class="flex gap-x-5 items-center justify-center">
                                            <button class="btn btn-primary"
                                                onclick="location.href='{{ route('service.edit', $service->id) }}'">
                                                Edit
                                            </button>
                                            <form action="{{ route('service.destroy', $service->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Hapus data ini?')"
                                                    class="btn btn-danger">delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
