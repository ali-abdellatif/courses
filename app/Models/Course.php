<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $table = 'courses';
    public $timestamps = true;
    protected $fillable = array('name', 'price', 'start_date', 'end_date', 'sub_category_id','user_id','photo');

    public function subCategory()
    {
        return $this->belongsTo('App\Models\SubCategory');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
