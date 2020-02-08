<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = "member";
    protected $primaryKey = "id";

    protected $fillable = [
        'username',
        'email',
        'phone',
        'address',
        'zipcode',
        'avatar',
        'del_flg'
    ];
}
