<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\Client;
use App\Http\Requests\StoreTestimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Client $client)
    {
        return view('site.testimonial-create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Client $client)
    {
        // dd($client);
        // $newtest = new Testimonial;
        // $newtest->text = $request->text;
        // $newtest->client_id = $client->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('site.testimonial-edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
      //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back();
    }

    public function storetest(StoreTestimonial $request, $client)
    {
        $newtest = new Testimonial;
        $newtest->text = $request->text;
        $newtest->client_id = $client;
        $newtest->save();
        $clients = Client::all();
        return view('site.clients', compact('clients'));
    }

    public function updatetest(StoreTestimonial $request, Testimonial $testimonial) {
        $testimonial->text = $request->text;
        $testimonial->save();
        $clients = Client::all();
        return view('site.clients', compact('clients'));
    }
}
