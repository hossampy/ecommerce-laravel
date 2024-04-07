<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 overflow-hidden h-full">

<!-- Navigation Bar -->
<nav class="bg-gray-800 p-6">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <span class="font-semibold text-xl tracking-tight">My App</span>
        </div>
        <div class="block lg:hidden">
            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-200 border-gray-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="hidden lg:block">
            <div class="flex items-center">
                <a href="" class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4">Home</a>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4">About</a>
                <a href="" class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white">Contact</a>
                <a href="{{route('login')}}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white ml-4">Login</a>
                <a href="{{route('register')}}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white ml-4">Register</a>
            </div>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mx-auto py-64  ">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800">Welcome to My App</h1>
        <p class="mt-4 text-lg text-gray-600">A simple and intuitive platform for your needs.</p>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 p-6 text-center text-gray-200">
    <p>&copy; 2024 My App. All rights reserved.</p>
</footer>

<script>
    // Mobile Navigation Toggle
    document.getElementById('nav-toggle').addEventListener('click', function () {
        var navMenu = document.getElementById('nav-menu');
        navMenu.classList.toggle('hidden');
    });
</script>

</body>
</html>
