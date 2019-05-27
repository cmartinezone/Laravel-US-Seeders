<?php

use Illuminate\Database\Seeder;

class state40TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of RI - Rhode Island.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Barrington', 'state_id' => 40],
                ['name' => 'Bristol', 'state_id' => 40],
                ['name' => 'Prudence Island', 'state_id' => 40],
                ['name' => 'Warren', 'state_id' => 40],
                ['name' => 'Coventry', 'state_id' => 40],
                ['name' => 'West Greenwich', 'state_id' => 40],
                ['name' => 'East Greenwich', 'state_id' => 40],
                ['name' => 'Greene', 'state_id' => 40],
                ['name' => 'Warwick', 'state_id' => 40],
                ['name' => 'West Warwick', 'state_id' => 40],
                ['name' => 'Adamsville', 'state_id' => 40],
                ['name' => 'Jamestown', 'state_id' => 40],
                ['name' => 'Little Compton', 'state_id' => 40],
                ['name' => 'Newport', 'state_id' => 40],
                ['name' => 'Middletown', 'state_id' => 40],
                ['name' => 'Portsmouth', 'state_id' => 40],
                ['name' => 'Tiverton', 'state_id' => 40],
                ['name' => 'Albion', 'state_id' => 40],
                ['name' => 'Chepachet', 'state_id' => 40],
                ['name' => 'Clayville', 'state_id' => 40],
                ['name' => 'Fiskeville', 'state_id' => 40],
                ['name' => 'Forestdale', 'state_id' => 40],
                ['name' => 'Foster', 'state_id' => 40],
                ['name' => 'Glendale', 'state_id' => 40],
                ['name' => 'Greenville', 'state_id' => 40],
                ['name' => 'Harmony', 'state_id' => 40],
                ['name' => 'Harrisville', 'state_id' => 40],
                ['name' => 'Hope', 'state_id' => 40],
                ['name' => 'Manville', 'state_id' => 40],
                ['name' => 'Mapleville', 'state_id' => 40],
                ['name' => 'North Scituate', 'state_id' => 40],
                ['name' => 'Oakland', 'state_id' => 40],
                ['name' => 'Pascoag', 'state_id' => 40],
                ['name' => 'Pawtucket', 'state_id' => 40],
                ['name' => 'Central Falls', 'state_id' => 40],
                ['name' => 'Cumberland', 'state_id' => 40],
                ['name' => 'Lincoln', 'state_id' => 40],
                ['name' => 'Slatersville', 'state_id' => 40],
                ['name' => 'Woonsocket', 'state_id' => 40],
                ['name' => 'North Smithfield', 'state_id' => 40],
                ['name' => 'Providence', 'state_id' => 40],
                ['name' => 'Cranston', 'state_id' => 40],
                ['name' => 'North Providence', 'state_id' => 40],
                ['name' => 'East Providence', 'state_id' => 40],
                ['name' => 'Riverside', 'state_id' => 40],
                ['name' => 'Rumford', 'state_id' => 40],
                ['name' => 'Smithfield', 'state_id' => 40],
                ['name' => 'Johnston', 'state_id' => 40],
                ['name' => 'Ashaway', 'state_id' => 40],
                ['name' => 'Block Island', 'state_id' => 40],
                ['name' => 'Bradford', 'state_id' => 40],
                ['name' => 'Carolina', 'state_id' => 40],
                ['name' => 'Charlestown', 'state_id' => 40],
                ['name' => 'Exeter', 'state_id' => 40],
                ['name' => 'Hope Valley', 'state_id' => 40],
                ['name' => 'Hopkinton', 'state_id' => 40],
                ['name' => 'Kenyon', 'state_id' => 40],
                ['name' => 'North Kingstown', 'state_id' => 40],
                ['name' => 'Rockville', 'state_id' => 40],
                ['name' => 'Saunderstown', 'state_id' => 40],
                ['name' => 'Shannock', 'state_id' => 40],
                ['name' => 'Slocum', 'state_id' => 40],
                ['name' => 'Wakefield', 'state_id' => 40],
                ['name' => 'Kingston', 'state_id' => 40],
                ['name' => 'Narragansett', 'state_id' => 40],
                ['name' => 'Peace Dale', 'state_id' => 40],
                ['name' => 'Westerly', 'state_id' => 40],
                ['name' => 'West Kingston', 'state_id' => 40],
                ['name' => 'Wood River Junction', 'state_id' => 40],
                ['name' => 'Wyoming', 'state_id' => 40]
            ]);
        }
    }
}
