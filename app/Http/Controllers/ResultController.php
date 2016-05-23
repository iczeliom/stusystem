<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\time;

use App\Course;

use App\Selectcourse;

class ResultController extends Controller
{
    public function index()
    {	
    	$output =User::all();
    	// dd($output);
    	foreach( $output as $name){
    						$boys[] = $name->name;
						    	};

    	
        // $boys=array('张三','赵四','王五','张伟','李静','王芳','张敏','王伟','刘丽','刘军');
			$classoutput =Course::all();
			foreach( $classoutput as $name){
    						$girls[] = $name->coursename;
						    	};
			// dd($girls);
			// $girls=array('选题1','选题2');
			//用户选题关联数组
			$favorites=array();
			//匹配计算结果
			$matching = array(
				//搜索路径
				'search'=>array(),
				//匹配结果
				'match'=>array(),
				//最大匹配数
				'max_match'=>0
			);
			

			//核心函数

			function make_favorite($boy,$girls,&$favorites){
				//选题数指数
				$romantic = rand(1,3);
				//选题总数
				$girls_total = count($girls);
				$favorite_girls = array();
				for ($i=0; $i < $romantic; $i++) { 
					$select = rand(0,$girls_total);
					while (in_array($select,$favorite_girls)) {
						$select = rand(0,$girls_total);
					}
					$favorite_girls[]=$select;
				}
					
				
				foreach ($girls as $key => $girl) {
					if(in_array($key,$favorite_girls)){
						$favorites[$boy][$girl] = true;
					}else {
						$favorites[$boy][$girl] = false;
					}
				}
			}

			function hungary(&$matching,$boys,$girls,$favorites){
				foreach ($boys as $boy) {
					//寻找增广路径
					if(find_augment_path($matching,$boy,$girls,$favorites)){
						$matching['max_match']++;
					}
					//清楚搜索结果
					clear_on_path_sign($matching);
				}
			}

			function find_augment_path(&$matching,$boy,$girls,$favorites){
				foreach ($girls as $girl) {
					if($favorites[$boy][$girl] && !in_array($girl, $matching['search'])){
						$matching['search'][]=$girl;
						if(!isset($matching['match'][$girl]) || find_augment_path($matching,$matching['match'][$girl],$girls,$favorites)){
							$matching['match'][$girl] = $boy;
							return true;
						}
					}
				}
				return false;
			}

			function clear_on_path_sign(&$matching){
				$matching['search'] = array();
			}

			//算法过程

			//随机初始化喜好列表
			// foreach ($boys as $value) {
			// 	make_favorite($value,$girls,$favorites);
			// }


			// $test = Selectcourse::where('username','=','admin')
			// 					->where(function($query){
			// 					$query->where('usercourse1','=','选题1');
			// 											})->first();
			
			// dd(empty($test));


			// 数据库查询喜好
			// 1.历遍用户
			// $favorites2 = array();
			foreach ($boys as $key => $value) {
						$girls_total = count($girls);
						//2.厉编选题
						for ($i=0; $i < $girls_total ; $i++) { 
							//3.判断是否有选
									$val = $girls[$i];

							$test = Selectcourse::where('username','=',$value)
								->where(function($query) use ($val){
								$query->where('usercourse1','=',$val);
														})->first();
								// dd(!empty($test));

							if (!empty($test)){
								$favorites[$value][$val] = true;
							}else{
								$favorites[$value][$val] = false;
							}
							
						}
					}
					// dd($favorites,$favorites2);

			//匈牙利算法
			hungary($matching,$boys,$girls,$favorites);

			// dd($favorites);
			// dd($matching['match']);

        return view('AmazeUI.classresult',[
        									'favorites' => $favorites,
        									'matching' => $matching['match']
        										]);
    }

    public function timeindex()
    {	
    	$time = time::all()->last();

    	return view('AmazeUI.classresultime',[
        									'time' => $time,
        										]);
    }

    public function setime(Request $request)
    {	
    	$input= new time; 
    	$input->time = $request->time;
    	// dd($input);
    	$input->save(); 
    	$time = time::all()->last();
    	return view('AmazeUI.classresultime',[
        									'time' => $time,
        										]);
    }
}
