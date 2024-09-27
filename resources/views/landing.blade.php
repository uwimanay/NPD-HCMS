<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>House Construction Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/a076d05399.css">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <style>
        .jumbotron {
            background-image: url('{{ asset('images/BackgroounHead.jpg') }}');
            background-size: cover;
            background-position: center;
            color: white;
        }
        .section-header {
            color: #555;
        }
        .bg-clients {
            background-color: #f8b195;
        }
        .bg-engineers {
            background-color: #355c7d;
            color: white;
        }
        .bg-admin {
            background-color: #f67280;
            color: white;
        }
        .card {
            border-radius: 10px;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .bg-how-it-works-1 {
            background-color: #f8b195;
        }
        .bg-how-it-works-2 {
            background-color: #355c7d;
        }
        .bg-how-it-works-3 {
            background-color: #f67280;
        }
        .bg-how-it-works-4 {
            background-color: #6c5b7b;
        }
        .bg-how-it-works-5 {
            background-color: #99b898;
        }
        .card-body {
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Success Message -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">HCMS</a>
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/mylogo.png') }}" alt="Logo" style="width: 80px;"> <!-- Adjust the width as needed -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services-page') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="{{ route('auth') }}">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 class="display-4 fw-bold"> NPD Ltd House Construction Management System</h1>
        <p class="lead fw-bold">Connecting homeowners with professional engineers and construction companies.</p>
        
        <a class="btn btn-primary btn-lg" href="{{ route('auth') }}" role="button">Get Started</a>
    </div>

    <section id="features" class="container my-5">
        <h1 class="text-center mb-4 section-header">Services</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card bg-clients border-0 h-100">
                    <div class="card-body">
                        <h3 class="card-title">Clients (Homeowners)</h3>
                        <ol class="list-group list-group-numbered">
                            <li class="py-1">Connect and Search with Engineers</li>
                            <li class="py-1">Appointment scheduling construction engineers</li>
                            <li class="py-1">Feedback and Review</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-engineers border-0 h-100">
                    <div class="card-body">
                        <h3 class="card-title">Construction Engineers</h3>
                        <ol class="list-group list-group-numbered">
                            <li class="py-1">Create and maintain their own profiles</li>
                            <li class="py-1">Showcase their qualifications and experience</li>
                            <li class="py-1">Reputation Management via feedback and review</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-admin border-0 h-100">
                    <div class="card-body">
                        <h3 class="card-title">Companies</h3>
                        <ol class="list-group list-group-numbered">
                            <li class="py-1">Reach a wider audience of potential clients</li>
                            <li class="py-1">Centralized platform for connecting with clients</li>
                            <li class="py-1">Reputation Management via feedback and review</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rest of your content remains unchanged -->

    <footer class="bg-dark text-white pt-5 pb-4">
        <!-- Footer content here -->
    </footer>

    <!-- Include jQuery and Bootstrap JS for the alert to work -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
