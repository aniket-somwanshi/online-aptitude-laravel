<?php
use Illuminate\Contracts\Auth\Access\Gate;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
//admin login controller
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//admin index page

//admin add test page
Route::get('/admin/addtest', 'AdminController@addTest')->name('admin.addtest');
//admin add test request
Route::post('/admin/addtest', 'TestController@addNewTest')->name('admin.test.submit');
//admin add questions
Route::post('/admin/addtest/addquestions', 'TestController@addQuestions')->name('admin.test.questions.submit');









//teacher login controller
Route::get('/teacher/login', 'Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
Route::post('/teacher/login', 'Auth\TeacherLoginController@login')->name('teacher.login.submit');
//teacher index page
Route::get('/teacher', 'TeacherController@index')->name('teacher.dashboard');



// student giving the test


//start test

// result of student for student
Route::get('/user/result/{id}',['as'=>'result','uses'=>'TestController@getShowResultOfTestForGuest']);




Route::group(['prefix'=>'user'], function(){
    Route::post('test/save-question-result/{id}', ['as'=>'save-question','uses'=>'TestController@postSaveQuestionResult']);
    Route::get('test/{id}/start', ['as'=>'before-exam','uses'=>'TestController@getBeforeStartTest']);
    Route::get('test/{id}/start-test', ['as'=>'start-exam','uses'=>'TestController@getStartTest']);

});
