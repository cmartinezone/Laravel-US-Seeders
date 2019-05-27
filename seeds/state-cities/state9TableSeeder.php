<?php

use Illuminate\Database\Seeder;

class state9TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of DE - Delaware.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Dover', 'state_id' => 9],
                ['name' => 'Dover Afb', 'state_id' => 9],
                ['name' => 'Camden Wyoming', 'state_id' => 9],
                ['name' => 'Cheswold', 'state_id' => 9],
                ['name' => 'Clayton', 'state_id' => 9],
                ['name' => 'Felton', 'state_id' => 9],
                ['name' => 'Frederica', 'state_id' => 9],
                ['name' => 'Harrington', 'state_id' => 9],
                ['name' => 'Hartly', 'state_id' => 9],
                ['name' => 'Houston', 'state_id' => 9],
                ['name' => 'Kenton', 'state_id' => 9],
                ['name' => 'Little Creek', 'state_id' => 9],
                ['name' => 'Magnolia', 'state_id' => 9],
                ['name' => 'Marydel', 'state_id' => 9],
                ['name' => 'Smyrna', 'state_id' => 9],
                ['name' => 'Viola', 'state_id' => 9],
                ['name' => 'Woodside', 'state_id' => 9],
                ['name' => 'Bear', 'state_id' => 9],
                ['name' => 'Newark', 'state_id' => 9],
                ['name' => 'Claymont', 'state_id' => 9],
                ['name' => 'Delaware City', 'state_id' => 9],
                ['name' => 'Hockessin', 'state_id' => 9],
                ['name' => 'Kirkwood', 'state_id' => 9],
                ['name' => 'Middletown', 'state_id' => 9],
                ['name' => 'Montchanin', 'state_id' => 9],
                ['name' => 'New Castle', 'state_id' => 9],
                ['name' => 'Odessa', 'state_id' => 9],
                ['name' => 'Port Penn', 'state_id' => 9],
                ['name' => 'Rockland', 'state_id' => 9],
                ['name' => 'Saint Georges', 'state_id' => 9],
                ['name' => 'Townsend', 'state_id' => 9],
                ['name' => 'Winterthur', 'state_id' => 9],
                ['name' => 'Yorklyn', 'state_id' => 9],
                ['name' => 'Wilmington', 'state_id' => 9],
                ['name' => 'Bethany Beach', 'state_id' => 9],
                ['name' => 'Bethel', 'state_id' => 9],
                ['name' => 'Bridgeville', 'state_id' => 9],
                ['name' => 'Dagsboro', 'state_id' => 9],
                ['name' => 'Delmar', 'state_id' => 9],
                ['name' => 'Ellendale', 'state_id' => 9],
                ['name' => 'Fenwick Island', 'state_id' => 9],
                ['name' => 'Frankford', 'state_id' => 9],
                ['name' => 'Georgetown', 'state_id' => 9],
                ['name' => 'Greenwood', 'state_id' => 9],
                ['name' => 'Harbeson', 'state_id' => 9],
                ['name' => 'Laurel', 'state_id' => 9],
                ['name' => 'Lewes', 'state_id' => 9],
                ['name' => 'Lincoln', 'state_id' => 9],
                ['name' => 'Milford', 'state_id' => 9],
                ['name' => 'Millsboro', 'state_id' => 9],
                ['name' => 'Millville', 'state_id' => 9],
                ['name' => 'Milton', 'state_id' => 9],
                ['name' => 'Nassau', 'state_id' => 9],
                ['name' => 'Ocean View', 'state_id' => 9],
                ['name' => 'Rehoboth Beach', 'state_id' => 9],
                ['name' => 'Seaford', 'state_id' => 9],
                ['name' => 'Selbyville', 'state_id' => 9]
            ]);
        }
    }
}
