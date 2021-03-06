<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\Uuids;

class User extends Authenticatable
{
    use Notifiable;
    // use Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'voornaam', 'achternaam', 'email', 'geboortedatum', 'geslacht', 'profilepic', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public $incrementing = false;

    public function diaryEntries(){
      return $this->hasMany('App\DiaryEntry');
    }
}
