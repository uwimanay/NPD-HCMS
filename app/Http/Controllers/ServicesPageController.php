<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesPageController extends Controller
{
    public function index()
    {
        // Return the view for the services page
        return view ('services-page'); // Make sure this matches your view file name
    }
}
