<?php

namespace App\Http\Controllers;

use App\Profil;
use App\Role;
use App\User;
use App\Services\Intervention;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfil;


use Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profils = Profil::all();
        $roles = Role::all();
        $users = User::all();
        return view('account.profils', compact('profils', 'roles', 'users'));
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        return view('profils-show', compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        return view('account.profils-edit', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfil $request, Profil $profil, Intervention $intervention)
    {
       
        // $this->authorize('update', $profil);
        $profil->name=$request->name;
        $profil->job=$request->job;
        if($request->image) {
            $profil->image=$request->image->store('', 'image');
        }
        // image intervention to resize image
        $img = $intervention->imageResize('image','300','300',$profil->image);
        $img->save();
        $profil->save();
        $profils = Profil::all();
        $users = User::all();
        return view('account.profils', compact('profils','users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
