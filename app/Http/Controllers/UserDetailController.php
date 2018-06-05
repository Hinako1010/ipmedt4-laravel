<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;
use PDF;

class UserDetailController extends Controller
{

    public function store(Request $request){

      $user = new UserDetail([
        'voornaam' => $request->get('voornaam'),
      ]);

      $user->save();
      return redirect('/index');
    }
    public function index(){

      $users = UserDetail::all();

      return view('index', compact('users'));
    }

    public function downloadPDF($id){
      $user = UserDetail::find($id);

      $pdf = PDF::loadView('pdf', compact('user'));
//      return $pdf->download('symptomen_overzicht.pdf');
      return $pdf->stream('symptomen_overzicht.pdf');

//      return view('bugfix', compact('user'));
//
}
}
