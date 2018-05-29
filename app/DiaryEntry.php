<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class DiaryEntry extends Model
{
    use Uuids;
    protected $table = 'diary_entries';

    public $incrementing = false;
    
}
