<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array('commission', 'fb_link', 'tw_link', 'gmail_link', 'bank_account',
        'bank_number','email_address','office_address','office_time');

}
