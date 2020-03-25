@inject('role','App\Models\Role')
<?php
$roles = $role->pluck('display_name','id')->toarray();
?>

<div class="form-group">
    <label for="name">الاسم</label>
    {!! Form::text('name',null,[
    'class'     =>     'form-control'
    ]) !!}
</div>
<div class="form-group">
    <label for="email">البريد الالكتروني</label>
    {!! Form::text('email',null,[
    'class'     =>     'form-control'
    ]) !!}
</div>
<div class="form-group">
    <label for="password">كلمة السر</label>
    {!! Form::password('password',[
    'class'     =>     'form-control'
    ]) !!}
</div>
<div class="form-group">
    <label for="password_confirmation">تاكيد كلمة المرور</label>
    {!! Form::password('password_confirmation',[
    'class'     =>     'form-control'
    ]) !!}
</div>
<div class="form-group">
    <label for="roles-list">رتب المستخدمين</label>
    {!! Form::select('roles-list[]',$roles,null,[
    'class'     =>     'form-control',
    'multiple'  =>     'multiple'
    ]) !!}
</div>

<div class="form-group">
    <button class="btn btn-success" type="submit"> حفظ</button>
</div>
