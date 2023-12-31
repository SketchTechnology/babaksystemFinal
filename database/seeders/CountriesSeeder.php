<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $country = array(
            array('id' => '1', 'name' => 'مصر', 'created_at' => '2021-04-01 02:47:01', 'updated_at' => '2021-04-03 04:49:31'),
            array('id' => '2', 'name' => 'الامارات العربيه المتحده', 'created_at' => '2021-04-01 02:47:01', 'updated_at' => '2021-04-03 04:49:31'),
        );
        DB::table('countries')->insert($country);
        }
}
