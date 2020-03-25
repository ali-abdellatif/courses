<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Event::all();
        return view('admin.event.home',compact('records'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
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
            'title'              =>    'required',
            'address'            =>    'required',
            'time'               =>    'required',
            'image'              =>    'required',
            'day'                =>    'required',
            'month'              =>    'required',
        ];
        $this->validate($request,$rules);
        $record = Event::create($request->all());
        if ($request->hasFile('image'))
        {
            $path = public_path();
            $destinationPath = $path . '/uploads/events/'; // upload path
            $logo = $request->file('image');
            $extension = $logo->getClientOriginalExtension(); // getting image extension
            $name = time() . '' . rand(11111, 99999) . '.' . $extension; // renameing image
            $logo->move($destinationPath, $name); // uploading file to given path
            $record->image = 'uploads/events/'.$name;
            $record->save();
        }
        return redirect(url('event'));
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
        $model = Event::findOrFail($id);
        return view('admin.event.edit',compact('model'));
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
            'title'              =>    'required',
            'start_date'         =>    'required',
            'address'            =>    'required',
            'time'               =>    'required',
            'image'              =>    'required',
            'day'                =>    'required',
            'month'              =>    'required',
        ];
        $this->validate($request,$rules);
        $record = Event::findOrFail($id);
        $record->update($request->all());
        return redirect(url('event'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Event::findOrFail($id);
        $record->delete();
        return back();
    }
}
