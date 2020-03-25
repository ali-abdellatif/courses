
<div class="form-group">
    <label for="name"> ادخل اسم الكورس</label>
    {!! Form::text('name',null,[
    'class'     =>     'form-control'
    ]) !!}
</div>
<div class="form-group">
    <label for="display_name">السعر</label>
    {!! Form::text('price',null,[
    'class'     =>     'form-control'
    ]) !!}
</div>
<div class="col-md-6">
    <label for="display_name">نهاية ميعاد الكورس</label>
    {!! Form::date('end_date',null,[

    ]) !!}
</div>
<div class="col-md-6">
    <label for="display_name">بداية ميعاد الكورس</label>
    {!! Form::date('start_date',null,[

    ]) !!}
</div>
<br>
<br>
<div class="form-group">
    <label for="photo">اختر الصوره</label>
    {!! Form::file('photo',null,[
        'class'    =>       'form-control',
    ]) !!}
</div>

<div class="form-group">
    {!! Form::label('اختر القسم :') !!}
    @inject('categories','App\Models\SubCategory')
    {!! Form::select('sub_category_id',$categories->pluck('name','id')->toArray(),null,[
    'class'    =>       'form-control',
    'placeholder'  =>    'اختر الشعبه الخاص بالكورس'
    ]) !!}
</div>
<div class="form-group">
    {!! Form::label('اختر القسم :') !!}
    @inject('categories','App\Models\User')
    {!! Form::select('user_id',$categories->pluck('name','id')->toArray(),null,[
    'class'    =>       'form-control',
    'placeholder'  =>    'اختر اسم المدرب'
    ]) !!}
</div>

<div class="form-group">
    <button class="btn btn-success" type="submit"> حفظ</button>
</div>





