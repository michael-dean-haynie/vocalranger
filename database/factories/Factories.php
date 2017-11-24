<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// // Class full of helper functions for seeding
// abstract class Seedy{
//   // Users
//   public static function doThing(){
//     return 'This is a thing!';
//   }
// }

$factory->define(App\Vocalist::class, function (Faker $faker) {
  $isMale = rand(0,1);
  $givenName = $isMale ? $faker->firstNameMale : $faker->firstNameFemale;
  $sex = $isMale ? 'Male' : 'Female';
  
  return [
    'family_name' => $faker->lastName,
    'given_name' => $givenName,
    'sex' => $sex,
  ];
});