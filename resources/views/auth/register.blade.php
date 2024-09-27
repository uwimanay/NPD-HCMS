<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="text-center mt-5">Register</h2>
    <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required pattern="[A-Za-z\s]+" title="Name should only contain letters.">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select name="role" class="form-control" required>
                <option value="homeowner">Homeowner</option>
                <option value="engineer">Engineer</option>
                <option value="company">Company</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
</div>

<script>
    document.querySelector('form').addEventListener('submit', function(e) {
        var nameInput = document.querySelector('input[name="name"]');
        var nameValue = nameInput.value;

        // Regular expression to allow only letters and spaces
        var namePattern = /^[A-Za-z\s]+$/;

        if (!namePattern.test(nameValue)) {
            e.preventDefault(); // Stop form submission
            alert('Name should only contain letters and spaces.');
        }
    });
</script>

</body>
</html>
