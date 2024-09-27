<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        // Return the view for the About Us page
        return view('about-us'); // Make sure this matches your view file name
    }
}
