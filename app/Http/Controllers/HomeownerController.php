<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeownerController extends Controller
{
    /**
     * Display the homeowner dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Logic to display homeowner dashboard
        return view('homeowner.dashboard');
    }
}
