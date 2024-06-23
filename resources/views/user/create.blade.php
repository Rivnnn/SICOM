@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h1>Form Tambah User</h1>
                <a href="{{ route('user.index') }}">Back</a>
            </div>
            <form method="POST" action="{{ route('user.store') }}" class="form">
                @csrf
                <div class="form-group">
                    <label for="name">
                        <span><sup>*</sup></span> Nama User
                    </label>
                    <div class="input-container">
                        <input type="text" name="name" id="name" placeholder="Masukan Nama"
                            value="{{ old('name') }}">
                        @error('name')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">
                        <span><sup>*</sup></span> Email
                    </label>
                    <div class="input-container">
                        <input type="text" name="email" id="email" placeholder="Masukan Email"
                            value="{{ old('email') }}">
                        @error('email')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">
                        <span><sup>*</sup></span> Password
                    </label>
                    <div class="input-container">
                        <input type="password" name="password" id="password" placeholder="Masukan Password"
                            value="{{ old('password') }}">
                        @error('password')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">
                        <span><sup>*</sup></span> Confirm Password
                    </label>
                    <div class="input-container">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Masukan Password" value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="role_id">
                        <span><sup>*</sup></span> Role
                    </label>
                    <div class="input-container">
                        <input type="number" name="role_id" id="role_id" placeholder="Tentukan Role"
                            value="{{ old('role_id') }}">
                        @error('role_id')
                            <x-invalid :message="$message" />
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
