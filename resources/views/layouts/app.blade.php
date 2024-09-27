<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- CoreUI and Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/coreui/4.2.4/coreui.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <!-- CoreUI and Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/coreui/4.2.4/coreui.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.card').on('click', function() {
                $(this).toggleClass('shadow-lg shadow-sm');
            });
        });
    </script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/coreui/4.2.4/coreui.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/coreui/4.2.4/coreui.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>
</html>
