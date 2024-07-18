<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'SICOM') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <nav class="bg-white shadow-md">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center py-4">
                    <div>
                        {{-- <a href="{{ route('seller.dashboard') }}" class="text-xl font-bold text-gray-700">Seller --}}
                        Dashboard</a>
                    </div>
                    <div>
                        <a href="{{ route('seller.services.index') }}" class="text-gray-700 px-4">Services</a>
                        <a href="{{ route('seller.orders.index') }}" class="text-gray-700 px-4">Orders</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-gray-900">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <main class="flex-grow container mx-auto p-4">
            @yield('content')
        </main>
        {{-- @include('partials.footer') --}}
    </div>
</body>

</html>
