<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EngineerController extends Controller
{
    /**
     * Display the engineer dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
    
    public function engineerDashboard()
    {
        //$projects = Project::where('user_id', '!=', auth()->id())->get(); // Get all projects except those created by the engineer
        
        $projects = Project::where('user_id', '!=', Auth::id())->get();

        return view('engineer.dashboard', compact('projects'));
    }
  
}
