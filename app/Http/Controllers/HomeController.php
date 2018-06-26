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
          $naam = Auth::user()->voornaam;
          $welkom = 'Welkom terug, '.$naam;

          \Session::flash('msg', 'Changes Saved.' );
          return redirect('/home')->with( 'success', $welkom);


        }
        else {
          return view('newhome');
        }
    }
}
