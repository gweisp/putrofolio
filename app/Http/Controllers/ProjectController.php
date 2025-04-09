<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Menampilkan daftar project untuk publik
    public function index()
    {
        $projects = Project::latest()->paginate(6);
        return view('projects.index', compact('projects'));
    }

    // Menampilkan detail project untuk publik
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}
