@extends('admin.master')
@inject('model','App\Models\SubCategory')
@section('title')
    اضافة شعبة جديدة
    <br>
@endsection
@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            {!! Form::model($model,[
            'action'      =>          'Admin\SubCategoryController@store',
            ]) !!}
            @include('admin.subcategory.form')
            @include('admin.helper.error')
            {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection

