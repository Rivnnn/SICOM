@extends('layouts.app')
@section('content')
<<<<<<< HEAD
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <a href="{{ route('user.create') }}" class="btn btn-success">Tambah Data</a>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama User</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Role</th>
                    <th scope="col" class="px-6 py-3">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                        <td class="px-6 py-4">{{ $user->name }}</td>
                        <td class="px-6 py-4">{{ $user->email }}</td>
                        <td class="px-6 py-4">{{ $user->role->role }}</td>
                        <td class="text-left py-3 px-4">
                            <a href="{{ route('user.edit', $user->id) }}" class="text-blue-500 hover:text-blue-600">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="inline-table"
                                onsubmit="return confirm('Hapus data ini ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
=======
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card flex flex-wrap justify-center bg-white rounded shadow-md p-4">
                    <div class="card-header">{{ __('Data user') }}</div>
                    <div class="card-body">
                        <a class="btn" href="{{ route('user.index') }}">Creat data</a>
                    </div>
                    <table class="responsive-table w-full border">
                        <thead class="bg-gray-200 h-10">
                            <tr class="border">
                                <th class="border border-white text-center">No</th>
                                <th class="border border-white text-center">Nama User</th>
                                <th class="border border-white text-center">Email</th>
                                <th class="border border-white text-center">Role</th>
                                <th class="border border-white text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index => $user)
                                <tr class="border">
                                    <td class="border text-center">{{ $index + 1 }}</td>
                                    <td class="border text-center">{{ $user->name }}</td>
                                    <td class="border text-center">{{ $user->email }}</td>
                                    <td class="border text-center">{{ $user->role->role }}</td>
                                    <td class="border text-center">
                                        <div class="flex gap-x-5 items-center justify-center">
                                            <button class="btn btn-primary"
                                                onclick="location.href='{{ route('user.edit', $user->id) }}'">
                                                Edit
                                            </button>
                                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Hapus data ini ?')"
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
>>>>>>> 42b18341464550f11dca950e966d67c2ead72565
    </div>
@endsection
