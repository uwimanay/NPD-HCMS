<!-- resources/views/services.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - House Construction Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .section-header {
            color: #555;
            font-size: 2.5rem;
            font-weight: bold;
        }
        .service-icon {
            font-size: 3rem;
            color: #6c757d;
            margin-bottom: 15px;
        }
        .card {
            border-radius: 10px;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-10px);
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
        .service-section {
            margin-top: 60px;
            margin-bottom: 60px;
        }
        .service-image {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .service-description {
            font-size: 1.1rem;
            color: #555;
        }
        .feature-list {
            font-size: 1.1rem;
            color: #333;
            list-style: none;
            padding-left: 0;
        }
        .feature-list li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .feature-list li i {
            margin-right: 10px;
            color: #007bff;
        }
        .cta-section {
            background-color: #355c7d;
            color: white;
            padding: 60px 0;
            text-align: center;
            border-radius: 10px;
        }
        .cta-button {
            background-color: #f67280;
            color: white;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 30px;
            transition: background-color 0.3s;
            margin-top: 20px;
        }
        .cta-button:hover {
            background-color: #f8b195;
            color: white;
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

    <section class="container service-section">
        <h1 class="text-center section-header">Our Services</h1>
        
        <!-- Service 1: Clients (Homeowners) -->
        <div class="row align-items-center my-5">
            <div class="col-md-6">
                <img src="{{ asset('images/service1.jfif') }}" alt="Clients" class="service-image">
            </div>
            <div class="col-md-6">
                <h3 class="service-title"><i class="fas fa-home service-icon"></i> Clients (Homeowners)</h3>
                <p class="service-description">We connect homeowners with experienced and qualified construction engineers. Our platform provides an easy way to search, schedule, and manage appointments with engineers, ensuring a smooth construction process.</p>
                <ul class="feature-list">
                    <li><i class="fas fa-search"></i> Connect and Search with Engineers</li>
                    <li><i class="fas fa-calendar-alt"></i> Appointment Scheduling</li>
                    <li><i class="fas fa-comment-dots"></i> Feedback and Reviews</li>
                </ul>
            </div>
        </div>
        
        <!-- Service 2: Construction Engineers -->
        <div class="row align-items-center my-5">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('images/service2.jfif') }}" alt="Construction Engineers" class="service-image">
            </div>
            <div class="col-md-6 order-md-1">
                <h3 class="service-title"><i class="fas fa-hard-hat service-icon"></i> Construction Engineers</h3>
                <p class="service-description">Construction engineers can showcase their skills, experience, and qualifications to potential clients. Our platform provides a centralized place to manage your profile, generate leads, and build a strong reputation.</p>
                <ul class="feature-list">
                    <li><i class="fas fa-user-edit"></i> Create and Maintain Profiles</li>
                    <li><i class="fas fa-briefcase"></i> Showcase Qualifications and Experience</li>
                    <li><i class="fas fa-star"></i> Reputation Management via Feedback and Reviews</li>
                </ul>
            </div>
        </div>
        
        <!-- Service 3: Companies -->
        <div class="row align-items-center my-5">
            <div class="col-md-6">
                <img src="{{ asset('images/service3.jfif') }}" alt="Companies" class="service-image">
            </div>
            <div class="col-md-6">
                <h3 class="service-title"><i class="fas fa-building service-icon"></i> Companies</h3>
                <p class="service-description">Companies can reach a wider audience of potential clients and connect with them on a centralized platform. Improve your visibility, showcase your services, and stand out in the competitive market.</p>
                <ul class="feature-list">
                    <li><i class="fas fa-bullhorn"></i> Reach a Wider Audience</li>
                    <li><i class="fas fa-network-wired"></i> Centralized Platform for Client Connections</li>
                    <li><i class="fas fa-trophy"></i> Reputation Management via Feedback and Reviews</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <h2>Ready to Get Started?</h2>
        <p>Join the House Construction Management System today and connect with professionals to build your dream home.</p>
        <a href="{{ route('auth') }}" class="cta-button">Sign Up Now</a>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
