<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailer extends Model
{
    protected $fillable=['name','email','user_message'];
}
