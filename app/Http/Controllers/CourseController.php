<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;

class CourseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        //查找数据库course,传递给视图输出
    $output =Course::all();
        return view('AmazeUI.createclass')->with('output',$output);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         // dd($request->all());
        //接受数据
       $input= new Course; 
        //存入数据库
        $input->coursename = $request->coursename;
        $input->coursemaster = $request->coursemaster;
        $input->coursenumber = $request->coursenumber;
        $input->courseschool = $request->courseschool;
        $input->save();       
        //重定向
        return redirect('createclass');
    }

    //删除课程
    public function delete($id)
    {   
        // dd($id);
        Course::findOrFail($id)->delete();
        return redirect('createclass');
    }

    //选修搜索控制
      public function searchindex()
    {
        $searchcourse="";
        return view('AmazeUI.classearch')->with('searchcourse',$searchcourse);
    }

     public function classearch(Request $request)
    {
        $coursename=$request->coursename;
        // $searchcourse=Course::find($coursename);
        //未找到$user=null
        $searchcourse = Course::where('coursename','=', $coursename)->first();
        // dd($searchcourse);
        return view('AmazeUI.classearch')->with('searchcourse',$searchcourse);
    }

    //教师搜索控制
      public function masterindex()
    {
        $searchcourse="";
        return view('AmazeUI.mastersearch')->with('searchcourse',$searchcourse);
    }

     public function mastersearch(Request $request)
    {
        $mastername=$request->mastername;
        // $searchcourse=Course::find($mastername);
        //未找到$user=null
        // dd($searchcourse);
        $user = Course::where('coursemaster','=', $mastername)->first();
        // dd($user);
        return view('AmazeUI.mastersearch')->with('searchcourse',$user);
    }

}
