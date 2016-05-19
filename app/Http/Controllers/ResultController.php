<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ResultController extends Controller
{
    public function index()
    {
        $boys=array('Peter','Allen','Jhon','Mike','Anthony','Austin','Hugo','Howard','Jimmy','Paul');
			//女生列表
			$girls=array('Mary','Alice','Cindy','Janet','Natasha','Peggy','Sarah','Zoey','Mandy','Judy');
			//男生喜好女生关联数组
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
				//风流指数
				$romantic = rand(1,5);
				//女孩总数
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
			foreach ($boys as $value) {
				make_favorite($value,$girls,$favorites);
			}

			//匈牙利算法
			hungary($matching,$boys,$girls,$favorites);

			dd($matching['match']);

        return view('AmazeUI.storeclass');
    }
}
