<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homeowner Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: #f7f9fc;
        }
        .container {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header, .content, .footer {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">HCMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#features">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#how-it-works">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="#">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>
<div class="container">
    <div class="header text-center">
        <h1>Welcome, Homeowner</h1>
        <p>Manage your projects and engage with engineers.</p>
        <div class="text-center">
        <!-- resources/views/dashboard.blade.php -->
<form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
<div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-primary">Go Back to Home Page</a>
    </div>
    </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Post a Project</h5>
                        <p class="card-text">Describe your construction project and get bids from engineers.</p>
                        <a href="{{ route('post-project.create') }}" class="btn btn-primary">Post Project</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">View Bids</h5>
                        <p class="card-text">Review and accept bids from engineers for your projects.</p>
                        <a href="{{ route('view-bids') }}" class="btn btn-secondary">View Bids</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Manage Projects</h5>
                        <p class="card-text">Keep track of your ongoing and completed projects.</p>
                        <a href="{{ route('manage-project') }}" class="btn btn-info">Manage Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer text-center">
        <a href="{{ url('/logout') }}" class="btn btn-danger">Logout</a>
    </div>
</div>

<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">House Construction Management System</h5>
                <p class="text-dark">Bridging the gap between homeowners and construction professionals for efficient and transparent project management.</p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Quick Links</h5>
                <p>
                    <a href="#" class="text-dark" style="text-decoration: none;">Home</a>
                </p>
                <p>
                    <a href="#"class="text-dark" style="text-decoration: none;">About Us</a>
                </p>
                <p>
                    <a href="#" class="text-dark" style="text-decoration: none;">Services</a>
                </p>
                <p>
                    <a href="#" class="text-dark" style="text-decoration: none;">Contact</a>
                </p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Useful Links</h5>
                <p>
                    <a href="#" class="text-dark" style="text-decoration: none;">Your Account</a>
                </p>
                <p>
                    <a href="#" class="text-dark" style="text-decoration: none;">Become an Engineer</a>
                </p>
                <p>
                    <a href="#" class="text-dark" style="text-decoration: none;">FAQs</a>
                </p>
                <p>
                    <a href="#" class="text-dark" style="text-decoration: none;">Help</a>
                </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Contact</h5>
                <p class="text-dark">
                    <i class="fas fa-home mr-3"></i> KN 270 St, Kigali Rwanda
                </p>
                <p class="text-dark">
                    <i class="fas fa-envelope mr-3"></i> information@hcms.com
                </p>
                <p class="text-dark">
                    <i class="fas fa-phone mr-3"></i> +250 785 071 442
                </p>
                <p class="text-dark">
                    <i class="fas fa-print mr-3"></i> +250 788 609 171
                </p>
            </div>
        </div>

        <hr class="mb-4">

        <div class="row align-items-center">
            <div class="col-md-7 col-lg-8">
                <p class="text-uppercase mb-4 font-weight-bold text-primary">© 2024 House Construction Management System. All Rights Reserved.</p>
            </div>

            <div class="col-md-5 col-lg-4">
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


