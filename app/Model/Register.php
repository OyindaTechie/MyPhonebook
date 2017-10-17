<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    //
    protected $fillable=['id','firstname','lastname','username','password','phonenumber'];
     //protected $guarded = ['id'];
}
