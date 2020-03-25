
<div class="form-group">
    <label for="name"> Enter Event Title</label>
    {!! Form::text('title',null,[
    'class'     =>     'form-control'
    ]) !!}
</div>
{{--<div class="form-group">--}}
{{--    <label for="display_name">Enter Event Date</label>--}}
{{--    {!! Form::text('start_date',null,[--}}
{{--    'class'     =>     'form-control'--}}
{{--    ]) !!}--}}
{{--</div>--}}
<div class="form-group">
    <label for="day">Enter Event Day</label>
    {!! Form::text('day',null,[
    'class'     =>     'form-control'
    ]) !!}
</div>
<div class="form-group">
    <label for="month">Enter Event Month</label>
    {!! Form::text('month',null,[
    'class'     =>     'form-control'
    ]) !!}
</div>
<div class="form-group">
    <label for="display_name">Enter Event Time</label>
    {!! Form::text('time',null,[
        'class'     =>     'form-control'
    ]) !!}
</div>
<div class="form-group">
    <label for="display_name">Enter Event Address</label>
    {!! Form::text('address',null,[
    'class'     =>     'form-control'
    ]) !!}
</div>
<br>
<div class="form-group">
    <label for="image">choose Photo</label>
    {!! Form::file('image',null,[
        'class'    =>       'form-control',
    ]) !!}
</div>


{{--<div class="form-group">--}}
{{--    {!! Form::label('اختر القسم :') !!}--}}
{{--    @inject('categories','App\Models\User')--}}
{{--    {!! Form::select('user_id',$categories->pluck('name','id')->toArray(),null,[--}}
{{--    'class'    =>       'form-control',--}}
{{--    'placeholder'  =>    'اختر اسم المدرب'--}}
{{--    ]) !!}--}}
{{--</div>--}}

<div class="form-group">
    <button class="btn btn-success" type="submit"> حفظ</button>
</div>





