@extends('errors::minimal')
{{--@extends('admin.master')--}}
{{--@section('content')--}}

{{--@section('title')--}}
{{--    التحكم في الاعضاء--}}
{{--@endsection--}}
{{--<div class="box">--}}
{{--    <div class="box-header with-border">--}}

{{--        <div class="box-tools pull-right">--}}
{{--            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"--}}
{{--                    title="Collapse">--}}
{{--                <i class="fa fa-minus"></i></button>--}}
{{--            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">--}}
{{--                <i class="fa fa-times"></i></button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<h1> نت غير مسموح لك لروئية الاعضاء</h1>--}}
@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
