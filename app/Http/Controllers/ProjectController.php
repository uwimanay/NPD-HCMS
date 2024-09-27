<?php
namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('user_id', Auth::id())->get(); // Display user-specific projects
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $project = Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'budget' => $request->budget,
            'deadline' => $request->deadline,
           // 'user_id' => auth()->id(),
            'user_id' => Auth::id(), // This is an alternative to auth()->id()
        ]);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    // public function update(Request $request, Project $project)
    // {
    //     $project->update($request->all());
    //     return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    // }
    public function update(Request $request, Project $project)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'budget' => 'required|numeric',
            'deadline' => 'required|date',
        ]);
    
        // Update the project
        $project->update($validated);
    
        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }
     

    public function assign($id)
    {
        $project = Project::find($id);
        $engineers = User::where('role', 'engineer')->get();
        $companies = User::where('role', 'company')->get();
        return view('projects.assign', compact('project', 'engineers', 'companies'));
    }

    public function storeAssignment(Request $request)
    {
        $project = Project::find($request->project_id);
        $project->engineer_id = $request->engineer_id;
        $project->company_id = $request->company_id;
        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project assigned successfully.');
    }
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $bids = $project->bids; // Get all bids for this project (if you want to display them)
        
        return view('projects.show', compact('project', 'bids'));
    }
    
}
