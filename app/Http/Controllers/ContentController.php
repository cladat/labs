<?php

namespace App\Http\Controllers;

use App\Content;
use Storage;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::all()->first();
        return view('site.content', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        $content = Content::all()->first();
        return view('site.content-edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $content->carousel_text=$request->carousel_text;
        $content->carousel_logo=$request->carousel_logo->store('', 'image');
        $content->projects_title=$request->projects_title;
        $content->projects_text1 = $request->projects_text1;
        $content->projects_text2 = $request->projects_text2;
        $content->clients_title = $request->clients_title;
        $content->services_title = $request->services_title;
        $content->team_title = $request->team_title;
        $content->page_services_title1 = $request->page_services_title1;
        $content->page_services_title2 = $request->page_services_title2;
        $content->contact_title = $request->contact_title;
        $content->contact_description = $request->contact_description;
        $content->contact_company = $request->contact_company;
        $content->contact_address = $request->contact_address;
        $content->contact_phone = $request->contact_phone;
        $content->contact_email = $request->contact_email;
        $content->save();
        $contents = Content::all();
        return view('site.content', compact('contents', 'content'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }
}
