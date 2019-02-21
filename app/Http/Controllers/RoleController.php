<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRole;
use App\Http\Requests\UpdateRole;
use App\User;
use Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $user = User::all();
        return view('account.roles', compact('roles', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.roles-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRole $request)
    {
        $newrole = new Role;
        $newrole->name = $request->name;
        $newrole->save();
        $roles = Role::all();
        $user = User::all();
        return view('account.roles', compact('roles', 'user'));
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
    public function edit(Role $role)
    {
        return view('account.roles-edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRole $request, Role $role)
    {
        $role->name=$request->name;
        $role->save();
        $roles = Role::all();
        return view('account.roles', compact('roles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $c = User::where('role_id', $role->id)->count();
        if($c == 0){
            $role->delete();
        }
        $roles = Role::all();
        $user = User::all();
        return view('account.roles', compact('roles', 'user'));
    }
}
