<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'SICOM') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <header class="bg-white shadow">
            <div class="container mx-auto px-4 py-6 flex justify-between items-center">
                <h1 class="text-2xl font-bold">{{ config('app.name', 'SICOM') }}</h1>
                <nav class="space-x-4">
                    {{-- <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-900">Dashboard</a> --}}
                    <a href="{{ route('admin.user.index') }}" class="text-gray-600 hover:text-gray-900">Users</a>
                    <a href="{{ route('admin.service.index') }}" class="text-gray-600 hover:text-gray-900">Services</a>
                    <a href="{{ route('admin.orders.index') }}" class="text-gray-600 hover:text-gray-900">Orders</a>
                    <a href="{{ route('admin.categories.index') }}"
                        class="text-gray-600 hover:text-gray-900">Categories</a>
                    <a href="{{ route('admin.review.index') }}" class="text-gray-600 hover:text-gray-900">Reviews</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-gray-900">Logout</button>
                    </form>
                </nav>
            </div>
        </header>
        <main class="flex-grow">
            @yield('content')
        </main>
    </div>
</body>

</html>
