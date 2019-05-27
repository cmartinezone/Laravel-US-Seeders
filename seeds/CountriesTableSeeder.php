<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //Create country if table is >= 0
        if (DB::table('countries')->get()->count() >= 0) {

            DB::table('countries')->insert([
                ['code' =>'USA','Name' => 'United States']

                ]);
        }
    }
}
