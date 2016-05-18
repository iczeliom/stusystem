<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return  Auth::user();
;
});
// 后台首页
 Route::get('admin', function () {
        return view('AmazeUI.admin-index');
});
// 个人资料
Route::get('userinfo', function () {
        return view('AmazeUI.userinfo');
});
//参加选课
Route::get('storeclass','CourseController@storeclassindex');
Route::post('storeclass','CourseController@storeclass');

//已选课
Route::get('selectclass', function () {
        return view('AmazeUI.selectclass');
});
//选课结果
Route::get('classresult', function () {
        return view('AmazeUI.classresult');
});
//选修课下学生
Route::get('selectclasses', function () {
        return view('AmazeUI.selectclasses');
});
//创建课程-教师界面
Route::get('createclass', 'CourseController@index');
Route::post('createclass','CourseController@create');
Route::post('createclass/{id}','CourseController@delete');

// 选课查询
Route::get('classearch', 'CourseController@searchindex');
Route::post('classearch','CourseController@classearch');
// 教师查询
Route::get('mastersearch', function () {
        return view('AmazeUI.mastersearch');
});
Route::get('mastersearch', 'CourseController@masterindex');
Route::post('mastersearch','CourseController@mastersearch');

//测试创建，列出课程页面
Route::get('createcourse','CourseController@index');
Route::post('createcourse','CourseController@create');
Route::post('createcourse/{id}','CourseController@delete');


Route::auth();

Route::get('/home', 'HomeController@index');
