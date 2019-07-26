<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Computer extends Model
{

    protected $fillable=['test_id','user_id','user_name','test_name','test_type','score'];

}
