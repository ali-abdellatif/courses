<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model 
{

    protected $table = 'sub_categories';
    public $timestamps = true;
    protected $fillable = array('name', 'category_id', 'video');

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

}