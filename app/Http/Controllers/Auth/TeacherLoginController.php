<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class TeacherLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:teacher');
    }

    public function showLoginForm(){
        return view('auth.teacher-login');
    }

    public function login(Request $request){
        //Validate form data like they are not null or password is greater than 6 lenght
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        //attept to login
        if(Auth::guard('teacher')->attempt(['email'=>$request->email,'password'=>$request->password], $request->remember))
        {
            //if succcess redirect
            //intended matlab login karkne k bad uss hi page pe layega
            return redirect()->intended(route('teacher.dashboard'));

        }

        //else back to login with the form data

        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
