<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        .custom-header {
            background-color: #87CEEB; /* Sky blue color */
            color: white;
            font-weight: bold;
            font-size: 1.2rem; /* Reduced size to fit with table */
        }

        .table-bordered th, .table-bordered td {
            border: 1px solid #D3D3D3; /* Light grey border */
        }

        .table {
            width: 100%; /* Make table full width */
        }

        .table th, .table td {
            vertical-align: middle; /* Center-align content vertically */
            padding: 16px; /* Increased padding for better spacing */
        }

        .btn-outline-primary {
            color: #007BFF;
            border-color: #007BFF;
        }

        .btn-outline-primary:hover {
            background-color: #007BFF;
            color: white;
        }

        .card-header {
            background-color: #007BFF; /* Darker blue for the card header */
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">   
        <div class="card-header custom-header d-flex justify-content-center py-3">
    <h2 class="mb-0" style="font-size: 2rem; font-weight: bold; color: white; text-align: center;">
        Project Dashboard
    </h2>
</div>



            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Budget</th>
                                <th>Deadline</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td class="fw-bold">{{ $project->title }}</td>
                                    <td>{{ Str::limit($project->description, 50) }}</td> <!-- Limit description length -->
                                    <td>${{ number_format($project->budget, 2) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($project->deadline)->format('d M Y') }}</td> <!-- Format the date -->
                                    <td>
                                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-eye"></i> View Project
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional, for interactive components) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
