<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'coursename', 'coursemaster', 'coursenumber','courseschool'
    ];
}
