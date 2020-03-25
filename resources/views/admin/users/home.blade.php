@extends('admin.master')
@section('content')

@section('title')
    التحكم في الاعضاء
@endsection

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
        <a href="{{url(route('user.create'))}}" class="btn btn-primary"> اضافة مستخدم جديد  <i class="fa fa-plus"></i></a>
        <br>
        <br>
        @if(count($records))
            <table class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr class="danger">
                        <th class="text-center">#</th>
                        <th class="text-center">اسم المستخدم </th>
                        <th class="text-center">الايميل </th>
                        <th class="text-center">الرتبه </th>
                        <th class="text-center">تعديل</th>
                        <th class="text-center">حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($records as $record)
                        <tr class="">
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="text-center">{{$record->name}}</td>
                            <td class="text-center">{{$record->email}}</td>
                            <td class="text-center">
                                @foreach($record->roles as $role)
                                    {{$role->display_name}}
                                @endforeach
                            </td>
                            <td class="text-center">
                                <a href="{{url(route('user.edit',$record->id))}}" class="btn btn-success btn-xs">تعديل <i class="ion-edit"></i></a>
                            </td>
                            <td class="text-center">
                                {!! Form::open([
                                'action'        =>         ['Admin\UserController@destroy',$record->id],
                                'method'        =>          'delete'
                                ]) !!}

                                <button type="submit" class="btn btn-danger btn-xs"> حذف <i class="ion-android-delete"></i></button>

                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </table>

        @else
            <div class="alert alert-danger" role="alert">
                لا يوجد بيانات
            </div>

        @endif
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

@endsection


