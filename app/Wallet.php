<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable =['fname','lname','email','company_name','short_desc','website','logo'];
}
