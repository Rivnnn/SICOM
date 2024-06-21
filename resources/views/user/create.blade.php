@extends('layouts.app')
@section('content')
    <div class="container mx-auto py-3">
        <div class=" flex flex-col border shadow-sm rounded-md p-10">
            <div class="flex justify-between items-center mb-5 border-b-4 pb-2">
                <h1 class="p-3 capitalize text-black font-bold">Form Tambah user</h1>
                <a href="{{ route('user.index') }}" class="capitalize">back</a>
            </div>
            <form method="POST" action="{{ route('user.store') }}" class="flex flex-col items-start"> @csrf
                <div class="flex w-full my-3">
                    <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Nama
                        user</label>
                    <div class="flex flex-col w-full">
                        <input type="text" name="name" id="" class="border py-2 px-1"
                            placeholder="Masukan name" value="{{ old('name') }}">
                        @error('name')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div>

                <div class="flex w-full my-3">
                    <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Email</label>
                    <div class="flex flex-col w-full">
                        <input type="text" name="email" id="" class="border py-2 px-1"
                            placeholder="Masukan Email" value="{{ old('email') }}">
                        @error('email')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div>

                <div class="flex w-full my-3">
                    <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Pasword</label>
                    <div class="flex flex-col w-full">
                        <input type="password" name="password" id="" class="border py-2 px-1"
                            placeholder="Masukan Password" value="{{ old('password') }}">
                        @error('password')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div>

                <div class="flex w-full my-3">
                    <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Confirm
                        password</label>
                    <div class="flex flex-col w-full">
                        <input type="password" name="password_confirmation" id="" class="border py-2 px-1"
                            placeholder="Masukan Password" value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div>

                <div class="flex w-full my-3">
                    <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span>Role</label>
                    <div class="flex flex-col w-full">
                        <input type="number" name="role_id" id="" class="border py-2 px-1"
                            placeholder="Tentukan Role" value="{{ 'role_id' }}">
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
