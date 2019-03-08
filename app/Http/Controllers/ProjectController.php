<?php

namespace App\Http\Controllers;

use App\Project;
use App\Icon;
use Storage;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProject;
use App\Http\Requests\UpdateProject;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        $icon = Icon::all();
        return view('site.projets', compact('projects', 'icon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icon = Icon::all();
        return view('site.projets-create', compact('icon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProject $request)
    {
        $newproj = new Project;
        $newproj->title=$request->title;
        $newproj->description=$request->description;
        $newproj->image=$request->image->store('', 'image');
        $newproj->icon_id=$request->icon_id;
        $newproj->save();
        $projects = Project::all();
        $icon = Icon::all();
        return view('site.projets', compact('projects', 'icon'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $icon = Icon::all();
        return view('site.projets-edit', compact('project', 'icon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProject $request, Project $project)
    {
        $project->title=$request->title;
        $project->description=$request->description;
        $project->icon_id=$request->icon_id;
        if ($request->image) {
            $project->image=$request->image->store('', 'image');
        }
        $project->save();
        $icon = Icon::all();
        $projects = Project::all();
        return view('site.projets', compact('projects','icon'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        $projects = Project::all();
        $icon = Icon::all();
        return view('site.projets', compact('projects', 'icon'));
    }
}
