<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Project;
use App\Models\Technologies;

class PortfolioController extends Controller
{
    public function index() {
        return Inertia::render('Introduction');
    }

    public function about() {
        return Inertia::render('AboutMe');
    }

    public function skills() {
        return Inertia::render('Skills');
    }

    public function works() {
        $projects = Project::get();

        foreach($projects as $project) {
            $project['technologies'] = Technologies::where('project_id', $project->id)->get()->toArray();
        }
        return Inertia::render('Works', [
            'projects' => $projects,
        ]);
    }

    public function contact() {
        return Inertia::render('Contact');
    }
}
