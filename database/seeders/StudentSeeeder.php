<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class StudentSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('student')->insert([
        //     'name'=> 'Aqeel1',
        //     'email'=>'aqeel1@gmail.com',
        //     'password'=>Hash::make('aqeel113'),
        // ]);

    //   foreach (range(1,10) as  $value) {
    //     DB::table('student')->insert([
    //         'name'=> str::random(10),
    //         'email'=> str::random(10).'@gmail.com',
    //         'password'=>Hash::make('str::random(10)'),
    //     ]);
        $faker= Faker::create();
        foreach (range(1,10) as  $value) {
            DB::table('student')->insert([
                'name'=> $faker->name(),
                'email'=> $faker->unique()->safeEmail(),
                'password'=>Hash::make($faker->password()),
            ]);
      }
    }
}
