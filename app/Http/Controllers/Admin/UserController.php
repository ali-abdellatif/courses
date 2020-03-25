<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends BackEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if (!auth()->user()->can('user-list'))
//        {
//            abort(403);
//        }
        $records = User::all();
        return view('admin.users.home',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'              =>        'required',
            'password'          =>        'required|confirmed',
            'email'             =>        'required|unique:users',
            'roles_list'        =>        'required'
        ]);
        $request->merge(['password'=>bcrypt($request->password)]);
        $user = User::create($request->except('roles-list'));
        $user->roles()->attach(array_values($request->input('roles-list')));

        return redirect(url(route('user.index')));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = User::findOrFail($id);
        return view('admin.users.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'            =>           'required',
            'email'           =>           'required',
            'password'        =>           'confirmed',
            'roles_list'      =>           'required'
        ]);
        $user = User::findOrFail($id);
        $request->merge(['password'=>bcrypt($request->password)]);
        $update = $user->update($request->expect('roles_list'));
        $user->roles()->attach((array)$request->input('roles_list'));
        return redirect(url(route('user.index')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }
}
