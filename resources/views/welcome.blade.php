@extends('layouts.app')
@section('content')
    <div class="container text-center my-4">
        <h1 class="text-4xl font-bold mb-8">Welcome to SICOM</h1>
        {{-- <form class="flex justify-center mb-10">
            <input class="form-control rounded-l-full px-4 py-2" type="search" placeholder="What service are you looking for?"
                aria-label="Search">
            <button class="bg-green-500 text-white px-4 py-2 rounded-r-full">Search</button>
        </form> --}}
        <div class="flex flex-wrap justify-center">
            <div class="w-1/2 md:w-1/4 lg:w-1/6 p-2">
                <a href="{{ route('user.orders.index') }}"
                    class="block bg-white rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 p-4 text-center">
                    <div class="text-5xl text-green-500">🎨</div>
                    <h5 class="font-bold mt-4">Graphics</h5>
                </a>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/6 p-2">
                <a href="{{ route('user.orders.index') }}"
                    class="block bg-white rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 p-4 text-center">
                    <div class="text-5xl text-green-500">📱</div>
                    <h5 class="font-bold mt-4">Digital Marketing</h5>
                </a>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/6 p-2">
                <a href="{{ route('user.orders.index') }}"
                    class="block bg-white rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 p-4 text-center">
                    <div class="text-5xl text-green-500">📝</div>
                    <h5 class="font-bold mt-4">Writing </h5>
                </a>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/6 p-2">
                <a href="{{ route('user.orders.index') }}"
                    class="block bg-white rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 p-4 text-center">
                    <div class="text-5xl text-green-500">🎬</div>
                    <h5 class="font-bold mt-4">Video & Animation</h5>
                </a>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/6 p-">
                <a href="{{ route('user.orders.index') }}"
                    class="block bg-white rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 p-4 text-center">
                    <div class="text-5xl text-green-500">🤖</div>
                    <h5 class="font-bold mt-4">AI Services</h5>
                </a>
            </div>
        </div>

        <div class="container mt-20">
            <h1 class="text-left text-3xl font-bold mb-8">Popular Services</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div>
                    <a href="{{ route('user.orders.index') }}"
                        class="block bg-green-500 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 text-white text-center p-4">
                        <img src="{{ asset('images/gambar2.jpeg') }}" alt="Image" width="1000">
                        <div class="p-4">
                            <h5 class="font-bold">Teknologi</h5>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="{{ route('user.orders.index') }}"
                        class="block bg-orange-500 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 text-white text-center p-4">
                        <img src="{{ asset('images/my.jpeg') }}" alt="Image" width="1000">
                        <div class="p-4">
                            <h5 class="font-bold">Design</h5>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="{{ route('user.orders.index') }}"
                        class="block bg-orange-500 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 text-white text-center p-4">
                        <img src="{{ asset('images/gambar3.jpeg') }}" alt="Image" width="1000">
                        <div class="p-4">
                            <h5 class="font-bold">Ilustration</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <footer class="mt-16">
            <div class="text-center text-gray-600">
                <p>&copy; 2024 <a href="" class="text-gray-900">SICOM</a>. All rights
                    reserved.</p>
            </div>
        </footer>
    </div>
@endsection
