<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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

        \DB::table('students')->insert([
            [
                'name' => 'trai',
                'gender' => 'nam',
                'image' => '',
                'birthday' => '',
                'created_at'   => Carbon::now()->subDay(3),
                'updated_at'   => Carbon::now()->subDay(3),
            ],
            [
                'name' => 'Lan Huong',
                'gender' => 'nu',
                'image' => '',
                'birthday' => '',
                'created_at'   => Carbon::now()->subDay(3),
                'updated_at'   => Carbon::now()->subDay(3),
            ],
        ]);
    }
}
