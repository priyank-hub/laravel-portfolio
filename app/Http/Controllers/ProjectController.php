<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technologies;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;


class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get();

        foreach($projects as $project) {
            $project['technologies'] = Technologies::where('project_id', $project->id)->get()->toArray();
        }
        return Inertia::render('Admin/Projects/Projects', [
            'user' => Auth::user(),
            'projects' => $projects->toArray(),
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Projects/Create', [
            'user' => Auth::user(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required'],
            'repo_path' => ['nullable', 'max:255'],
            'live_path' => ['nullable', 'max:255'],
            'note' => ['nullable', 'max:255'],
            'technologies.*.name' => ['required', 'max:255'], 
        ]);
        
        $path = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $slug = 'project-thumbnail';

            $path = $image->storeAs('images' .'/'. $slug, $image->getClientOriginalName(), 'public');
        }

        $project = Project::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'description' => $request->description,
            'repo_path' => $request->repo_path,
            'live_path' => $request->live_path,
            'note' => $request->note,
            'image_path' => $path,
        ]);
        
        foreach($request->technologies as $tech) {
            Technologies::create([
                'project_id' => $project->id,
                'name' => $tech['name'],
            ]);
        }

        return Redirect::route('admin.projects');
    }

    public function show(Project $project)
    {
        //
    }

    public function edit(Request $request)
    {   
        $project = Project::findOrFail($request->id);

        $project['technologies'] = Technologies::where('project_id', $request->id)->get()->toArray();

        return Inertia::render('Admin/Projects/Edit', [
            'user' => Auth::user(),
            'project' => $project,
        ]);
    }

    public function update(Request $request)
    {
        // dd($request->technologies);
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required'],
            'repo_path' => ['nullable', 'max:255'],
            'live_path' => ['nullable', 'max:255'],
            'note' => ['nullable', 'max:255'],
            'technologies.*.name' => ['required', 'max:255'], 
        ]);
        
        $project = Project::findOrFail($request->id);
        
        $path = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $slug = 'project-thumbnail';

            $path = $image->storeAs('images' .'/'. $slug, $image->getClientOriginalName(), 'public');
            $project->image_path = $path;
        }

        $project->name = $request->name;
        $project->description = $request->description;
        $project->repo_path = $request->repo_path;
        $project->live_path = $request->live_path;
        $project->note = $request->note;

        $project->save();
        
        foreach($request->technologies as $tech) {
            Technologies::where('id', $tech['id'])->update([
                'name' => $tech['name'],
            ]);
        }

        return Redirect::route('admin.projects');
    }

    public function destroy(Project $project)
    {
        //
    }
}
