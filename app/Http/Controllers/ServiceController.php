<?php

namespace App\Http\Controllers;

use App\Service;
use App\Icon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $icon = Icon::all();
       return view('site.services', compact('services', 'icon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = Icon::all();
        return view('site.services-create', compact('icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newservice = new Service;
        $newservice->title=$request->title;
        $newservice->description=$request->description;
        $newservice->icon_id=$request->icon_id;
        $newservice->save();
        $services = Service::all();
        $icon = Icon::all();
        return view('site.services', compact('services', 'icon'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $icons = Icon::all();
        return view('site.services-edit', compact('service', 'icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->title=$request->title;
        $service->description=$request->description;
        $service->icon_id=$request->icon_id;
        $service->save();
        $icon = Icon::all();
        $services = Service::all();
        return view('site.services', compact('services','icon'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        $services = Service::all();
        $icon = Icon::all();
        return view('site.services', compact('services', 'icon'));
    }
}
