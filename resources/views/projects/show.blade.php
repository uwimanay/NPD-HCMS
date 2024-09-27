<!-- resources/views/projects/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">{{ $project->title }}</h1>
        <p><strong>Description:</strong> {{ $project->description }}</p>
        <p><strong>Budget:</strong> ${{ $project->budget }}</p>
        <p><strong>Deadline:</strong> {{ $project->deadline->format('Y-m-d') }}</p>

        <!-- Add any additional details or functionalities here -->

        @extends('layouts.app')

@section('content')
<div class="container">
    <h2>Project: {{ $project->title }}</h2>

    <p><strong>Description:</strong> {{ $project->description }}</p>
    <p><strong>Budget:</strong> ${{ $project->budget }}</p>
    <p><strong>Deadline:</strong> {{ $project->deadline }}</p>
    
    <h3>Bids</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Bidder</th>
                <th>Amount</th>
                <th>Message</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bids as $bid)
            <tr>
                <td>{{ $bid->engineer_id ? $bid->engineer->name : $bid->company->name }}</td>
                <td>{{ $bid->amount }}</td>
                <td>{{ $bid->message }}</td>
                <td>{{ ucfirst($bid->status) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Submit a Bid</h3>
    <form action="{{ route('bids.store') }}" method="POST">
        @csrf
        <input type="hidden" name="project_id" value="{{ $project->id }}">
        
        <div class="form-group">
            <label for="amount">Bid Amount:</label>
            <input type="number" name="amount" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="message">Bid Message:</label>
            <textarea name="message" class="form-control" rows="4"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit Bid</button>
    </form>
</div>
@endsection

    </div>
</body>
</html>
