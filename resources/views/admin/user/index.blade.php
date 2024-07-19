@extends('layouts.admin')
@section('content')
    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-10">
        <div class="flex justify-between mb-4">
            <h2 class="text-2xl font-bold">Data Users</h2>
            <a href="{{ route('admin.users.create') }}"
                class="btn btn-success hover:bg-green-700 transition duration-300 ease-in-out">Tambah Data</a>
        </div>
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
                                <a href="{{ route('admin.users.edit', $user->id) }}"
                                    class="bg-blue-500 text-white px-2 py-1 rounded"    >Edit</a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                    class="inline-table" onsubmit="return confirm('Hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 text-white px-2 py-1 rounded inline-table">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
