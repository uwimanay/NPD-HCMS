
<form action="{{ route('projects.update', $project) }}" method="POST">
    

    @csrf
    @method('PUT') <!-- Or you can use PATCH, depending on your logic -->
    
    <!-- Form Fields -->
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" class="form-control" required>{{ $project->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="budget">Budget:</label>
        <input type="number" name="budget" class="form-control" value="{{ $project->budget }}" required>
    </div>

    <div class="form-group">
        <label for="deadline">Deadline:</label>
        <input type="date" name="deadline" class="form-control" value="{{ $project->deadline }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Project</button>
</form>
