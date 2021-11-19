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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();

        foreach($projects as $project) {
            $project['technologies'] = Technologies::where('project_id', $project->id)->get()->toArray();
        }
        // dd($projects->toArray());
        return Inertia::render('Admin/Projects/Projects', [
            'user' => Auth::user(),
            'projects' => $projects->toArray(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Projects/Create', [
            'user' => Auth::user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
