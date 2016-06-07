<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;

use App\Selectcourse;

use App\User;

use Auth;

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
       $user = Auth::user();
    $output =Course::where('coursemaster','=',$user->name)->get();
        return view('AmazeUI.createclass')->with('output',$output);
    }

    //更新用户信息
    public function updateinfo(Request $request)
    {
        $username = Auth::user()->name;
        $user = User::where('name','=',$username)->first();
        $user ->name = $request ->name;
        $user ->personid = $request ->personid;
        $user ->school = $request ->status;
        $user->save();
   
        return view('AmazeUI.userinfo');
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
        Global $searchcourse2;
        $searchcourse2 = Course::where('coursename','like', '%'.$coursename.'%')->first();
        
        if ( $searchcourse2 == null) {
          $searchcourse2 = '未找到';
        };
        
        return view('AmazeUI.classearch')->with('searchcourse',$searchcourse2);
    }

    //教师搜索控制
      public function masterindex()
    {
        $searchcourse="";
        $emailsearh="";
        return view('AmazeUI.mastersearch')->with('searchcourse',$searchcourse);
    }

     public function mastersearch(Request $request)
    {
        //去空格
        $mastername=trim($request->mastername);
        // $searchcourse=Course::find($mastername);
        //未找到$user=null
        // dd($searchcourse);
        Global $masteremail;
        Global $user;
        $masteremail = User::where('name','like','%'.$mastername.'%')->first();
        
        if ($masteremail == null) {
          $user = '未找到';
          $masteremail = '未找到';
        }else{
        $name = User::where('email','=',$masteremail->email)->first();
        // dd($masteremail);
        $user = Course::where('coursemaster','=', $name->name)->first();
            };
        return view('AmazeUI.mastersearch',[
                                          'searchcourse' => $user,
                                          'masteremail' => $masteremail
                                            ]);
      }

    //分配选修
  


    //参加选修课
    public function storeclassindex()
    {
        //查找数据库course,传递给视图输出
        $user = Auth::user();
        //所有同学院的课题
        $output2 =Course::where('courseschool','=', $user->school)->get();        
        // $masteremail = User::where('courseschool','=',$mastername);

        return view('AmazeUI.storeclass')->with('output',$output2);
    }

    public function storeclass(Request $request)
    {
      if ($request->checkbox) {
        $input= new Selectcourse; 
         $inputcourse = $request;
          $input->username = $inputcourse->username;
          $input->usercourse1 = $inputcourse->checkbox;
          $input->usermaster = $inputcourse->coursemaster;
          $input->save();
         
      };
         // $searchcourse = Selectcourse::where('username','=', $inputcourse->username)->first();

          //查找数据库course,传递给视图输出
        $user = Auth::user();
        //所有同学院的课题
        $output2 =Course::where('courseschool','=', $user->school)->get();   

        return view('AmazeUI.storeclass')->with('output',$output2);
    }    

    //输出已选选题
    public function selectclassindex()
    {
        $user = Auth::user();
      
        //查找数据库course,传递给视图输出
        $output = Selectcourse::where('username','=', $user->name)->get();
        // $output =Selectcourse::all();
        return view('AmazeUI.selectclass',[
                                          'output' => $output
                                            ]);
    }

    //选题视图
    public function selectclassesindex()
    {
        //查找数据库course,传递给视图输出
        $output =Selectcourse::all();

        return view('AmazeUI.selectclasses')->with('output',$output);
    }

}
