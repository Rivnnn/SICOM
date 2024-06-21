@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card flex flex-wrap justify-center bg-white rounded shadow-md p-4">
                    <div class="card-header">{{ __('Data user') }}</div>
                    <x-link-button url="user.create" title="create data" type="base" />
                    <div class="card-body">
                        <table class="w-full border">
                            <thead class="bg-gray-200 h-10">
                                <tr class="border items-center ">
                                    <th class="border border-white text-center">No</th>
                                    <th class="border border-white text-center">Nama User</th>
                                    <th class="border border-white text-center">Email</th>
                                    <th class="border border-white text-center">Role</th>
                                    <th class="border border-white text-center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                    <tr class="border ">
                                        <td class="border text-center ">{{ $index + 1 }} </td>
                                        <td class="border text-center">{{ $user->name }}</td>
                                        <td class="border text-center">{{ $user->email }}</td>
                                        <td class="border text-center">{{ $user->role_id }} </td>
                                        <td class="border text-center">
                                            <div class="flex gap-x-5 items-center justify-center">
                                                <x-link-button url="user.edit" :params="$user->id" title="edit"
                                                    type="primary" />
                                                <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Hapus data ini ?')"
                                                        class="capitalize text-white bg-red-500 py-2 px-3 rounded-md">delete</button>
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
    </div>
@endsection
