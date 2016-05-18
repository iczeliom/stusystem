<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //name=用户名，email=邮箱，密码，性别，学工号，身份，学院或专业，选课状态默认null
    protected $fillable = [
        'name', 'email', 'password','sex','personid','status','school','coursestatus'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
