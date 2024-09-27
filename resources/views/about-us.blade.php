<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 20px;
        }
        h1, h2 {
            color: #007BFF;
        }
        p {
            margin-bottom: 15px;
            color: #333;
        }
        .card {
            background-color: #e3f2fd;
            border: none;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            color: #0056b3;
        }
        .icon {
            font-size: 40px;
            color: #007BFF;
            margin-bottom: 15px;
        }
        a {
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
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
                    <!-- <a class="nav-link" href="#how-it-works">About Us</a> -->
                    <li><a class="nav-link" href="{{ url('/about-us') }}">About Us</a></li>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" href="{{ route('services-page') }}">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="#">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <h1 class="text-center">About Us</h1>
        <p class="text-center">Welcome to House Construction Management System</p>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-tools icon"></i>
                        <h5 class="card-title">What We Do</h5>
                        <p class="card-text">Our system provides a responsive web application that enables clients to easily find and engage with highly qualified engineers for new builds or renovations.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-eye icon"></i>
                        <h5 class="card-title">Our Vision</h5>
                        <p class="card-text">We aim to enhance the quality of construction services, improve operational efficiency, and foster seamless collaboration between clients and engineers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-thumbs-up icon"></i>
                        <h5 class="card-title">Why Choose Us?</h5>
                        <p class="card-text">We offer a user-friendly interface, efficient connections, and enhanced collaboration tools to manage your projects effectively.</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center mt-5">Contact Us</h2>
        <p class="text-center">For more information or support, please reach out to us at <a href="mailto:support@constructionmanagement.com">support@constructionmanagement.com</a>.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

