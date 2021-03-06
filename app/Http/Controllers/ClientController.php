<?php

namespace App\Http\Controllers;

use App\Client;
use App\Testimonial;
use Storage;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClient;
use App\Http\Requests\UpdateClient;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('site.clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.clients-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClient $request)
    {
        $newclient = new Client;
        $newclient->name = $request->name;
        $newclient->job = $request->job;
        $newclient->image = $request->image->store('', 'image');
        $newclient->save();
        $clients = Client::all();
        return view('site.clients', compact('clients', 'test'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('site.clients-edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClient $request, Client $client)
    {
        $client->name=$request->name;
        $client->job=$request->job;
        if ($request->image) {
            $client->image=$request->image->store('', 'image');
        }
        $client->save();
        $clients = Client::all();
        return view('site.clients', compact('clients'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        $clients = Client::all();
        return view('site.clients', compact('clients'));
    }
}
