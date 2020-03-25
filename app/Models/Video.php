<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model 
{

    protected $table = 'videos';
    public $timestamps = true;
    protected $fillable = array('name', 'video', 'course_id');

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

}