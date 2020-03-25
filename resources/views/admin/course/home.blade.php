@extends('admin.master')
@section('content')

@section('title')
    الكورسات
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
        <a href="{{url(route('course.create'))}}" class="btn btn-primary"> اضافة كورس جديد  <i class="fa fa-plus"></i></a>
        <br>
        <br>
        @if(count($records))
            <table class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr class="danger">
                        <th class="text-center">#</th>
                        <th class="text-center">الاسم </th>
                        <th class="text-center">السعر </th>
                        <th class="text-center">الشعبه </th>
                        <th class="text-center">اسم الدرب </th>
                        <th class="text-center">ميعاد بداية الكورس</th>
                        <th class="text-center">نهاية ميعاد الكورس</th>
                        <th class="text-center">الصوره</th>
                        <th class="text-center">تعديل</th>
                        <th class="text-center">حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($records as $record)
                        <tr class="">
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="text-center">{{$record->name}}</td>
                            <td class="text-center">{{$record->price}}</td>
                            <td class="text-center">{{optional($record->subCategory)->name}}</td>
                            <td class="text-center">{{optional($record->user)->name}}</td>
                            <td class="text-center">{{$record->start_date}}</td>
                            <td class="text-center">{{$record->end_date}}</td>
                            <td class="text-center">
                                <img src="{{asset($record->photo)}}" style="max-width: 100px; max-height: 100px;"/>
                            </td>
                            <td class="text-center">
                                <a href="{{url(route('course.edit',$record->id))}}" class="btn btn-success btn-xs">تعديل <i class="ion-edit"></i></a>
                            </td>
                            <td class="text-center">
                                {!! Form::open([
                                    'action'        =>         ['Admin\CourseController@destroy',$record->id],
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



