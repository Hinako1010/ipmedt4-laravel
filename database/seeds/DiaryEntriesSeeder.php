<?php

use Illuminate\Database\Seeder;
use App\DiaryEntry;

class DiaryEntriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diaryEntries = [
          [
            "user_id" => 1,
            "bodytemp" => 39.4,
            "mood" => "low",
            "energy" => "mid-low",
            "cut" => 1,
            "tickbite" => 0,
            "skinrash" => 0,
            "headache" => 1,
            "shoulderpain" => 0,
            "elbowpain" => 0,
            "hippain" => 1,
            "thighpain" => 0,
            "kneepain" => 0,
            "shinpain" => 1,
          ],
          [
            "user_id" => 1,
            "bodytemp" => 40.4,
            "mood" => "low",
            "energy" => "low",
            "cut" => 1,
            "tickbite" => 0,
            "skinrash" => 0,
            "headache" => 1,
            "shoulderpain" => 0,
            "elbowpain" => 0,
            "hippain" => 1,
            "thighpain" => 0,
            "kneepain" => 1,
            "shinpain" => 1,
          ],
          [
            "user_id" => 1,
            "bodytemp" => 37.1,
            "mood" => "mid",
            "energy" => "mid-high",
            "cut" => 0,
            "tickbite" => 1,
            "skinrash" => 1,
            "headache" => 0,
            "shoulderpain" => 0,
            "elbowpain" => 1,
            "hippain" => 1,
            "thighpain" => 0,
            "kneepain" => 1,
            "shinpain" => 0,
          ],
        ];

        foreach($diaryEntries as $de){
          DiaryEntry::create($de);
        }
    }
}
