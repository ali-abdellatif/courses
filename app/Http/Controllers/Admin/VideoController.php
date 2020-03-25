<?php

namespace App\Http\Controllers\Admin;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Video::all();
        return view('admin.video.home',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name'                 =>     'required',
            'course_id'            =>     'required',
            /*'video'                =>     'required'*/
        ];
        $this->validate($request,$rules);
        $record= Video::create($request->all());
        if ($request->hasFile('video'))
        {
            $path = public_path();
            $destinationPath = $path . '/uploads/categories/'; // upload path
            $logo = $request->file('video');
            $extension = $logo->getClientOriginalExtension(); // getting image extension
            $name = time() . '' . rand(11111, 99999) . '.' . $extension; // renameing image
            $logo->move($destinationPath, $name); // uploading file to given path
            $record->photo = 'uploads/categories/'.$name;
            $record->save();
        }

        flash('تم الاضافة بنجاح')->success();
        return redirect(url('video'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model= Video::findOrFail($id);
        return view('admin.video.edit',compact('model'));
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
        $rules = [
            'name'                 =>     'required',
            'course_id'            =>     'required',
            /*'video'                =>     'required'*/
        ];
        $this->validate($request,$rules);
        $record = Video::findOrFail($id);
        $record->update($request->all());
        return redirect(url('video'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Video::findOrFail($id);
        $record->delete();
        return back();
    }
}
