<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    protected $fillable = [

 		'fullname',
 		'position',
 		'email',
 		'contact',
 		'location',
 		'exp',
 		'skills',
 		'file'

    ];
}
