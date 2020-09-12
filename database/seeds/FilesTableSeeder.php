<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('files')->delete();

        // generate 36 dummy posts students
        $files = [];
        $faker = Factory::create();
        

        for ($i = 1; $i <= 2; $i++)
        {
            $files[] = [
                'name'          => $temp = $faker->word,
                'path'       => 'files/2020/06/'.$temp.'.xlsx',
                'created_at'    => Carbon::now()->subDay(rand(6, 10))->subHours(rand(1, 5)),
                'updated_at'    => Carbon::now()->subDay(rand(1, 5))->subHours(rand(1, 5)),
            ];
        }
        \DB::table('files')->insert($files);
    }
}
