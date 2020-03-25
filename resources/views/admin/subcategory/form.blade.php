@inject('permi','App\Models\Permission')

<div class="form-group">
    <label for="name"> ادخل اسم الشعبه</label>
    {!! Form::text('name',null,[
    'class'     =>     'form-control'
    ]) !!}
</div>
<div class="form-group">
    {!! Form::label('اختر القسم :') !!}
    @inject('categories','App\Models\Category')
    {!! Form::select('category_id',$categories->pluck('name','id')->toArray(),null,[
    'class'    =>       'form-control',
    'placeholder'  =>    'اختر القسم الخاص بالصنف'
    ]) !!}
</div>


<div class="form-group">
    <button class="btn btn-success" type="submit"> حفظ</button>
</div>




