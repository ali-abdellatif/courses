<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $table = 'events';
    public $timestamps = true;
    protected $fillable = array('image', 'title', 'course_id', 'start_date', 'description','address','time','day','month');

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

}
