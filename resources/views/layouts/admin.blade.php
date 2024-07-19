<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'SICOM') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="min-h-screen flex flex-col">
        <header class="bg-white shadow">
            <div class="container mx-auto px-4 py-6 flex justify-between items-center">
                <h1 class="text-2xl font-bold">{{ config('app.name', 'SICOM') }}</h1>
                <nav class="space-x-4">
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-gray-900">Dashboard</a>
                    <a href="{{ route('admin.users.index') }}" class="text-gray-600 hover:text-gray-900">Users</a>
                    <a href="{{ route('admin.services.index') }}" class="text-gray-600 hover:text-gray-900">Services</a>
                    <a href="{{ route('admin.orders.index') }}" class="text-gray-600 hover:text-gray-900">Orders</a>
                    <a href="{{ route('admin.category.index') }}"
                        class="text-gray-600 hover:text-gray-900">Categories</a>
                    <a href="{{ route('admin.reviews.index') }}" class="text-gray-600 hover:text-gray-900">Reviews</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-gray-900">Logout</button>
                    </form>
                </nav>
            </div>
        </header>

        <div class="p-4 sm:ml-5">
            <div class="p-4 mt-14">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
