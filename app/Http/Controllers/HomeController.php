<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(6)->get(); // ambil 3 project terbaru
        return view('home', compact('projects'));
    }
}
