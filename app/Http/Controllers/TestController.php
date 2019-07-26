<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Test;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\TestRequest;
use App\Http\Requests\QuestionRequest;
use App\Question;
use App\User;
use App\Computer;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Type\Collection;


class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addNewTest(Request $req){

         $test = new Test($req->all());
         $test->save();
         session()->flash('flash_mess', 'Subject was created completely');

         return view("admin.addquestions", ["test_id"=>$test->id]);

    }

    public function addQuestions(Request $req)
    {
        //storing each question ayt a time into db
        $question = new Question($req->all());
        $question->save();
        session()->flash('flash_mess', 'Question was added successfully.');
        return view("admin.addquestions", ["test_id"=>$question->test_id]);
   }

//    before start test
    public function getBeforeStartTest($id){

        $test = Test::find($id);
        session()->forget('next_question_id');
        return view('student.start', compact('test'));
    }

    // start actual test
    public function getStartTest($id){
        // $test = Test::find($id);
        // $questions = $test->questions()->get();
        // //dd($questions);
        // $first_question_id = $test->questions()->min('id');
        // //dd($first_question_id);
        // $last_question_id = $test->questions()->max('id');

        // $duration = $test->duration;
        // //dd(session('next_question_id'));
        // if(session('next_question_id')){
        //     $current_question_id = session('next_question_id');
        // }
        // else{
        //     $current_question_id = $first_question_id;
        //     session(['next_question_id'=>$current_question_id]);
        // }
        // //dd($current_question_id);
        // return view('student.test', compact('test', 'questions', 'current_question_id', 'first_question_id', 'last_question_id', 'duration'));


// test2 try

$test = Test::find($id);
$qs = $test->questions()->get();

$fqid = $test->questions()->min('id');
$fq = Question::find($fqid);

$lqid = $test->questions()->max('id');
$lq = Question::find($lqid);

$duration = $test->duration;
$next=null;
//
return view('student.test2', compact('test','qs', 'fq', 'lq','next', 'duration'));

    }


    // save each answer
    public function postSaveQuestionResult($id, Request $req){




    //     //save result
    //     $test = Test::find($id);
    //     $question = Question::find($req->get('question_id'));
    //     if($req->get('option') != null){
    //         //save the answer into table
    //         $duration = $test->duration*60;
    //         $time_taken = ((int)$req->get('time_taken'.$question->id));
    //         $time_per_question = $duration - $time_taken;
    //         //dd($time_taken);
    //         // lets find out the correct ans for this q
    //         $correct_ans = $question->correct_option;
    //         //user's answer
    //         $user_ans = $req->get('option');
    //         //check if answer is correct
    //         if($user_ans==$correct_ans){
    //             $score=$score+1;
    //         }



    //     }

    // // $subject->questions()-> this is use of has many relation between models. like is subject ke question where...
    //     $next_question_id = $test->questions()->where('id','>',$req->get('question_id'))->min('id');
    //     if($next_question_id != null) {

    //         return Response::json(['next_question_id' => $next_question_id]);



    //     }
    //     // else{
    //     //     if(Auth::user()->branch=="Computer"){
    //     //         $c=new App\Computer;
    //     //         $c->test_id=$id;
    //     //         $c->test_name=$test->test_name;
    //     //         $c->test_type=$test->test_type;
    //     //         $c->user_id=Auth::user()->id;
    //     //         $c->user_name=Auth::user()->name;
    //     //         $c->score=$score;
    //     //         $c->save();
    //     //     }
    //     // }
    //     // check for branch of user for inserting score


    //     return redirect()->route('result',[$id]);


    //save time into session
    if(session()->has('minutes')){
       // return view('student.result');
    }
    session()->put('minutes',$req->get('minutes'));
    session()->put('seconds',$req->get('seconds'));

    // test2 save result try
    $test = Test::find($id);
    $duration=$test->duration;
    $question = Question::find($req->get('question_id'));
    //now save answers of this question

    //first count the score
    $score=0;
    if($req->get('option') != null){
        //save the answer into table
        // lets find out the correct ans for this q
        $correct_ans = $question->correct_option;
        //user's answer
        $user_ans = $req->get('option');
        //check if answer is correct
        if($user_ans==$correct_ans){
            $score=session()->get('score');
            $score=$score+1;
            session()->put('score', $score);
        }
    }

    //now fetch next question
    $next="ds";
    $nqid=$test->questions()->where('id','>',$req->get('question_id'))->min('id');
    //check if this is the last question
    $lqid = $test->questions()->max('id');

    if($nqid!==$lqid){
        $nq=Question::find($nqid);


    $data = array('next' => $next,
                  'nq' => $nq ,
                  'test' => $test ,
                  'duration' => $duration
                );


    return view('student.test2')->with($data);
    }

    else{
        //if next question is null
        //this is the last question

        //so save the score
        if(Auth::user()->branch=="Computer"){
            $c=new Computer;
            $c->test_id=$id;
            $c->test_name=$test->test_name;
            $c->test_type=$test->test_type;
            $c->user_id=Auth::user()->id;
            $c->user_name=Auth::user()->name;
            $c->score=session()->get('score');
            $c->save();
        }
        return redirect()->route('result',[$id]);
    }

    }


    // result of completed test to user

    public function getShowResultOfTestForGuest($id){
        //for emptying the timer
        session()->put('minutes',"empty");
        //test ka details fetch

        $test=Test::find($id);

        $user_id=Auth::user()->id;

        $user_branch=Auth::user()->branch;
        $suffix="s";
        $branch=$user_branch.$suffix;


        $res = DB::table('computers')->where('test_id', $id)->where('user_id',$user_id)->first();

        //result variables
        $test_name=$test->test_name;
        $number_q=$test->number_of_questions;
        $test_type=$test->test_type;
        $user_name=$res->user_name;
        $score=$res->score;
        $wrong=$number_q - $score;
        $percentage=($score*100)/$number_q;


        return view('student.result', compact('score','test_name','test_type','wrong','percentage'));

    }
}
