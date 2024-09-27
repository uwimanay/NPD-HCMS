<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BidController extends Controller
{
    // Method to display bids for a project
    public function showBids($projectId)
    {
        $project = Project::findOrFail($projectId);
        $bids = $project->bids;

        return view('bids.index', compact('project', 'bids'));
    }

    // Method to store a new bid
    public function store(Request $request)
    {
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'amount' => 'required|numeric',
            'message' => 'nullable|string',
        ]);

        Bid::create([
            'project_id' => $request->project_id,
            'engineer_id' => auth()->user()->role === 'engineer' ? auth()->id() : null,
            'company_id' => auth()->user()->role === 'company' ? auth()->id() : null,
            'amount' => $request->amount,
            'message' => $request->message,
            'status' => 'pending', // Optional: default status
        ]);

        return redirect()->back()->with('success', 'Bid submitted successfully!');
    }
}
