
<div class="form-group">
    <label for="name"> ادخل اسم الفيديو</label>
    {!! Form::text('name',null,[
    'class'     =>     'form-control'
    ]) !!}
</div>
<div>
    <label for="video"> اختر الفيديو </label>
    {!! Form::file('video',null,[
    'class'    =>       'form-control',
    ]) !!}
</div>
<hr>

<div class="form-group">
    {!! Form::label('اختر الكورس :') !!}
    @inject('courses','App\Models\Course')
    {!! Form::select('course_id',$courses->pluck('name','id')->toArray(),null,[
    'class'    =>       'form-control',
    'placeholder'  =>    'اختر اسم اللكورس'
    ]) !!}
</div>


<div class="form-group">
    <button class="btn btn-success" type="submit"> حفظ</button>
</div>





