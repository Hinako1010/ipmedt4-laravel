<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            //'profilepic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        if($data['profilepic']){
                
            $imageName = time().'.'.request()->profilepic->getClientOriginalExtension();
        
              request()->profilepic->move(public_path('images'), $imageName);
           $profilepic = $data['profilepic']; 
        }else{
            $profilepic = '';
        }
        if(isset($data['geslacht'])){
            $geslacht = $data['geslacht'];
        }else{
            $geslacht = '';
        }

        return User::create([
            'voornaam' => $data['name'],
            'achternaam' => $data['achternaam'],
            'email' => $data['email'],
            'geboortedatum' =>  $data['geboortedatum'],
            'profilepic' =>  $profilepic,
            'geslacht' => $geslacht,
            'password' => bcrypt($data['password']),
        ]);
    }
}
