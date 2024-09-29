<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>House Construction Management System</title>
    <link rel="stylesheet" href="https://kit.fontawesome.com/a076d05399.css">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .jumbotron {
            background-image: url('{{ asset(' images/BackgroounHead.jpg') }}');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .card {
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-10px);
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-100">

    @if(session('success'))
    <div class="bg-green-500 text-white px-4 py-3 rounded relative" role="alert">
        {{ session('success') }}
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <path
                    d="M14.348 14.849a1 1 0 0 1-1.415 0L10 11.414l-2.933 3.435a1 1 0 1 1-1.415-1.415l3.435-2.933L5.207 7.086a1 1 0 1 1 1.415-1.415l3.435 2.933L14.348 5.67a1 1 0 0 1 1.415 1.415L11.414 10l3.435 2.933a1 1 0 0 1 0 1.416z" />
            </svg>
        </span>
    </div>
    @endif

    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-lg font-bold">HCMS</a>
            <img src="{{ asset('images/mylogo.png') }}" alt="Logo" class="w-20"> <!-- Adjust the width as needed -->
            <ul class="flex space-x-4">
                <li><a href="{{ route('landing') }}" class="text-gray-600 hover:text-gray-900">Home</a></li>
                <li><a href="{{ route('about-us') }}" class="text-gray-600 hover:text-gray-900">About Us</a></li>
                <li><a href="{{ route('services-page') }}" class="text-gray-600 hover:text-gray-900">Services</a></li>
                <li><a href="{{ route('auth') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Sign Up</a></li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron text-center py-20">
        <h1 class="text-4xl font-extrabold mb-4">NPD Ltd House Construction Management System</h1>
        <p class="text-xl font-semibold mb-6">Connecting homeowners with professional engineers and construction
            companies.</p>
        <a href="{{ route('auth') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600">Get
            Started</a>
    </div>

    <section id="features" class="container mx-auto my-12">
        <h1 class="text-center text-3xl font-bold mb-8">Services</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="card bg-pink-200 rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Clients (Homeowners)</h3>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Connect and Search with Engineers</li>
                    <li>Appointment scheduling with engineers</li>
                    <li>Feedback and Review</li>
                </ol>
            </div>
            <div class="card bg-blue-700 text-white rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Construction Engineers</h3>
                <ol class="list-decimal list-inside space-y-2">
                    <li>Create and maintain their own profiles</li>
                    <li>Showcase qualifications and experience</li>
                    <li>Reputation management via feedback and reviews</li>
                </ol>
            </div>
            <div class="card bg-red-500 text-white rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Companies</h3>
                <ol class="list-decimal list-inside space-y-2">
                    <li>Reach a wider audience of potential clients</li>
                    <li>Centralized platform for connecting with clients</li>
                    <li>Reputation management via feedback and reviews</li>
                </ol>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            &copy; 2024 House Construction Management System
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.8.1/dist/cdn.min.js"></script>
</body>

</html>