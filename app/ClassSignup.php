<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassSignup extends Model
{
    protected $fillable =['name','email','password','phone','country']
}
