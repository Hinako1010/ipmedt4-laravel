<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()){
        
          \Session::flash('msg', 'Changes Saved.' );
          return redirect('/home');


        }
        else {
          return view('newhome');
        }
    }
}
