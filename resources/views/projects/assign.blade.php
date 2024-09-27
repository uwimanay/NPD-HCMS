<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Assign Project</h2>
    <form action="{{ route('projects.storeAssignment') }}" method="POST">
        @csrf
        <input type="hidden" name="project_id" value="{{ $project->id }}">

        <div class="form-group">
            <label for="engineer_id">Assign Engineer:</label>
            <select name="engineer_id" class="form-control" required>
                @foreach($engineers as $engineer)
                    <option value="{{ $engineer->id }}">{{ $engineer->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="company_id">Assign Company:</label>
            <select name="company_id" class="form-control" required>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Assign Project</button>
    </form>
</div>
</body>
</html>
