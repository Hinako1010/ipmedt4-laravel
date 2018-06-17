<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class DiaryEntry extends Model
{
    // use Uuids;
    protected $table = 'diary_entries';

    protected $fillable = [
      'user_id', 'bodytemp', 'cut', 'tickbite', 'skinrash', 'headache', 'shoulderpain', 'elbowpain', 'hippain', 'thighpain', 'kneepain', 'shinpain',
    ];

    // public $incrementing = false;

    public function iterateVisible(){
      $array = array();
      foreach($this as $key => $value) {
        $array[$key] = $value;
      }
      return $array;
    }

}
