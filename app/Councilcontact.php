<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Councilcontact extends Model
{
    protected $fillable =['fname','lname','company','email','phone','country'];
}
