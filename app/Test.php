<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class Test extends Model
{
    protected $fillable=['test_type','test_name','duration','number_of_questions'];

    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function hasQuestions(){
        if($this->questions()->get()->count()){
            return true;
        }
        else{
            return false;
        }
    }
}
