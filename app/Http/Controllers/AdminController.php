<?php
namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Bid;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $projects = Project::all();
        $bids = Bid::all();
        $users = User::all(); 

        return view('admin.dashboard', compact('projects', 'bids', 'users'));
       // return view('admin.dashboard'); // or whatever view you want to return
    }
}


