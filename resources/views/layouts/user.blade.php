@extends('layouts.user')

@section('content')
    <div class="flex">
        <aside class="w-64 bg-green-800 text-white h-screen">
            <div class="p-6">
                <h1 class="text-xl font-semibold">User Dashboard</h1>
                <nav class="mt-6">
                    <a href="{{ route('user.dashboard') }}" class="block py-2 px-4 hover:bg-green-700">Dashboard</a>
                    {{-- <a href="{{ route('user.services.index') }}" class="block py-2 px-4 hover:bg-green-700">Browse Services</a> --}}
                    <a href="{{ route('user.orders.index') }}" class="block py-2 px-4 hover:bg-green-700">My Orders</a>
                    {{-- <a href="{{ route('user.profile') }}" clas s="block py-2 px-4 hover:bg-green-700">Profile</a> --}}
                </nav>
            </div>
        </aside>    
        <main class="flex-1 p-6">
            @yield('user-content')
        </main>
    </div>
@endsection
