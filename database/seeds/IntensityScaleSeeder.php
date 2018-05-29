<?php

use Illuminate\Database\Seeder;
use App\Intensity;

class IntensityScaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $intensities = [
        ['intensity' => 'low'],
        ['intensity' => 'mid-low'],
        ['intensity' => 'mid'],
        ['intensity' => 'mid-high'],
        ['intensity' => 'high'],
      ];

      foreach($intensities as $intense){
        Intensity::create($intense);
      }
    }
}
