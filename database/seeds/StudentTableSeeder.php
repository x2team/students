<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;
// use Faker\Generator as Faker;
use Illuminate\Support\Str;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->delete();

        // generate 36 dummy posts students
        $students = [];
        $faker = Factory::create();
        $arr = array('nam', 'nu', 'khac');
        

        for ($i = 1; $i <= 36; $i++)
        {
            $students[] = [
                'name'          => $faker->name,
                'gender'       => $arr[array_rand($arr,1)],
                'image'       => 'presents/2020/06/picture-01_5ed62a315db9e.jpg',
                'birthday'       => rand(10,31).'/'.rand(10,12).'/'.rand(1990,2000),
                'point'       => rand(999,10000),
                'created_at'    => Carbon::now()->subDay(rand(6, 10))->subHours(rand(1, 5)),
                'updated_at'    => Carbon::now()->subDay(rand(1, 5))->subHours(rand(1, 5)),
            ];
        }
        \DB::table('students')->insert($students);

    }
}
