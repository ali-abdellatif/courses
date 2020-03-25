<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records= SubCategory::all();
        return view('admin.subcategory.home',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subcategory.create');
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
            'category_id'          =>     'required'
        ];
        $this->validate($request,$rules);
        $record = SubCategory::create($request->all());
        return redirect(url('subcategory'));
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
        $model = SubCategory::findOrFail($id);
        return view('admin.subcategory.edit',compact('model'));
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
            'category_id'          =>     'required'
        ];
        $this->validate($request,$rules);
        $record=SubCategory::findOrFail($id);
        $record->update($request->all());
        return redirect(url('subcategory'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = SubCategory::findOrFail($id);
        $record->delete();
        return back();
    }
}
