<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display the company dashboard.
     *
     * @return \Illuminate\View\View
     */

    public function show(Project $project)
{
    return view('projects.show', compact('project'));
}

    public function companyDashboard()
    {
        //$projects = Project::where('user_id', '!=', auth()->id())->get(); // Get all projects except those created by the company
       
        $projects = Project::where('user_id', '!=', Auth::id())->get();
       
        return view('company.dashboard', compact('projects'));
    }
}
