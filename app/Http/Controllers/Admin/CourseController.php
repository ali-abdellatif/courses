<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Course::all();
        return view('admin.course.home',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
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
            'name'                     =>     'required',
            'price'                    =>     'required',
            'sub_category_id'          =>     'required',
            'user_id'                  =>     'required',
            'photo'                    =>     'required'
        ];
        $this->validate($request,$rules);

//        $this->validate($request,$rules);
        $record = Course::create($request->all());
        if ($request->hasFile('photo'))
        {
            $path = public_path();
            $destinationPath = $path . '/uploads/courses/'; // upload path
            $logo = $request->file('photo');
            $extension = $logo->getClientOriginalExtension(); // getting image extension
            $name = time() . '' . rand(11111, 99999) . '.' . $extension; // renameing image
            $logo->move($destinationPath, $name); // uploading file to given path
            $record->photo = 'uploads/courses/'.$name;
            $record->save();
        }
        return redirect(url('course'));
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
        $model= Course::findOrFail($id);
        return view('admin.course.edit',compact('model'));
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
            'name'                     =>     'required',
            'price'                    =>     'required',
            'sub_category_id'          =>     'required',
            'user_id'                  =>     'required'
        ];
        $this->validate($request,$rules);
        $record = Course::findOrFail($id);
        $record->update($request->all());
        return redirect(url('course'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Course::findOrFail($id);
        $record->delete();
        return back();
    }
}
