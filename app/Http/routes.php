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
//参加选题
Route::get('storeclass','CourseController@storeclassindex');
Route::post('storeclass','CourseController@storeclass');

//已选课
Route::get('selectclass', 'CourseController@selectclassindex');

//选题结果
Route::get('classresult','ResultController@index');
//选题结果时间设置
Route::get('classresultime','ResultController@timeindex');
Route::post('classresultime','ResultController@setime');

//选题下学生
Route::get('selectclasses', 'CourseController@selectclassesindex');

//创建选题-教师界面
Route::get('createclass', 'CourseController@index');
Route::post('createclass','CourseController@create');
Route::post('createclass/{id}','CourseController@delete');

// 选题查询
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
