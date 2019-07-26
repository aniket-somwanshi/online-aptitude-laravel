<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Test;

class Question extends Model
{

    protected $fillable=['question','option_1','option_2','option_3','option_4','correct_option','test_id'];


    public function test()
    {
        return $this->belongsTo('App\Test');
    }


}
