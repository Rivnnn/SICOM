@extends('layouts.app')
@section('content')
    <div class="container mx-auto py-3">
        <div class=" flex flex-col border shadow-sm rounded-md p-10">
            <div class="flex justify-between items-center mb-5 border-b-4 pb-2">
                <h1 class="bg-teal-500 p-3 capitalize text-white font-bold">Form Edit user</h1>
                <a href="{{ route('user.index') }}" class="capitalize">back</a>
            </div>
            <form action="{{ route('user.update', $user->id) }}" method="post" class="flex flex-col items-start">
                @csrf
                @method('PATCH')
                <div class="flex w-full my-3">
                    <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Nama</label>
                    <div class="flex flex-col w-full">
                        <input type="text" name="name" id="" class="border py-2 px-1"
                            placeholder="Masukan Nama user" value="{{ $user->name }}">
                        @error('name')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div>

                <div class="flex w-full my-3">
                    <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Email</label>
                    <div class="flex flex-col w-full">
                        <input type="email" name="email" id="" class="border py-2 px-1"
                            placeholder="Masukan Email" value="{{ $user->email }}">
                        @error('email')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div>

                <div class="flex w-full my-3">
                    <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Password
                        lama</label>
                    <div class="flex flex-col w-full">
                        <input type="text" name="old_password" id="" class="border py-2 px-1"
                            placeholder="Masukan Password">
                        @error('password')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div>
                <div class="flex w-full my-3">
                    <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Password
                        baru</label>
                    <div class="flex flex-col w-full">
                        <input type="text" name="pasword" id="" class="border py-2 px-1"
                            placeholder="Masukan Password">
                        @error('password')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div>
                <div class="flex w-full my-3">
                    <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span>Role</label>
                    <div class="flex flex-col w-full">
                        <select name="role_id" id="">
                            <option value="">pilih role</option>
                            @foreach ($roles as $role)
                                <option value={{ $role->id }} {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                    {{ $role->role }}</option>
                            @endforeach
                        </select>
                        @error('role_id')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>


                </div>

                <div class="flex w-full justify-end">
                    <button type="submit"
                        class="bg-gray-800 text-white px-2 py-3 w-40 transition-all hover:bg-gray-900 font-semibold rounded-sm">Save</button>
                </div>

            </form>
        </div>
    </div>
@endsection
