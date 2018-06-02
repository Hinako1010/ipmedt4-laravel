<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [
        [
          "voornaam" => "Melissa",
          "achternaam" => "Julsing",
          "email" => "melissa@gmail.com",
          "geboortedatum" => "2000/01/01",
          "password" => bcrypt("qwerty"),
        ],
        [
          "voornaam" => "Hinako",
          "achternaam" => "Ogawa",
          "email" => "hinako@gmail.com",
          "geboortedatum" => "2000/01/01",
          "password" => bcrypt("qwerty"),
        ],
        [
          "voornaam" => "Ramon",
          "achternaam" => "Arents",
          "email" => "ramon@gmail.com",
          "geboortedatum" => "2000/01/01",
          "password" => bcrypt("qwerty"),
        ],
        [
          "voornaam" => "Dion",
          "achternaam" => "van den Berg",
          "email" => "dion@gmail.com",
          "geboortedatum" => "2000/01/01",
          "password" => bcrypt("qwerty"),
        ],
      ];

      foreach($users as $u){
        User::create($u);
      }
    }
}
