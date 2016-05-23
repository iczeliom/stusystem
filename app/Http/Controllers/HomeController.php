<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\time;

use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $Users =User::all();
        // return $Users;
        // return view('home')->with('Users',$Users);
        // return view('AmazeUI.admin-index');
            $time = time::all()->last();
            // dd($time);
        return view('AmazeUI.admin-index',[
                                            'time' => $time,
                                                ]);
    }
}
