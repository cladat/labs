<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Profil;
use Storage;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Services\Intervention;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('account.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collection = Role::all();
        return view('account.users-create', compact('collection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request, Profil $profil, Intervention $intervention)
    {
        $newprofil = new Profil;
        $newprofil->name = $request->name;
        $newprofil->job = $request->job;
        $newprofil->image = $request->image->store('', 'image');
        // image intervention for resize
        // $img = $intervention->imageResize('image','300','300',$newprofil->image);
        // $img->save();
        $newprofil->save();
        $newuser = new User;
        $newuser->email=$request->email;
        $newuser->password=bcrypt($request->password);
        $newuser->role_id=$request->role_id;
        $newuser->profil_id = $newprofil->id;
        $newuser->save();
        $profils = Profil::all();
        $users = User::all();
        return view('account.users', compact('users', 'profils'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $collection = Role::all();
        return view('account.users-edit', compact('user','collection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, User $user)
    {
        // $this->authorize('update', $user);
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->role_id=$request->role_id;
        $user->save();
        $users = User::all();
        return view('account.users', compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $aa = $user->profil_id;
        $user->delete();
        $prof = Profil::where('id', $aa)->delete();
        $users = User::all();
        return view('account.users', compact('users'));
    }

    public function block(User $user)
    {
        $user->status = 0;
        $user->save();
        $users = User::all();
        return view('account.users', compact('users'));
    }
    public function deblock(User $user)
    {
        $user->status = 1;
        $user->save();
        $users = User::all();
        return view('account.users', compact('users'));
    }
}
