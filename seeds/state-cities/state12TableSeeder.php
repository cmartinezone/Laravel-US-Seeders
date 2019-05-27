<?php

use Illuminate\Database\Seeder;

class state12TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of HI - Hawaii.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Captain Cook', 'state_id' => 12],
                ['name' => 'Hakalau', 'state_id' => 12],
                ['name' => 'Hawaii National Park', 'state_id' => 12],
                ['name' => 'Hawi', 'state_id' => 12],
                ['name' => 'Hilo', 'state_id' => 12],
                ['name' => 'Holualoa', 'state_id' => 12],
                ['name' => 'Honaunau', 'state_id' => 12],
                ['name' => 'Honokaa', 'state_id' => 12],
                ['name' => 'Honomu', 'state_id' => 12],
                ['name' => 'Ocean View', 'state_id' => 12],
                ['name' => 'Waikoloa', 'state_id' => 12],
                ['name' => 'Keauhou', 'state_id' => 12],
                ['name' => 'Kailua Kona', 'state_id' => 12],
                ['name' => 'Kamuela', 'state_id' => 12],
                ['name' => 'Keaau', 'state_id' => 12],
                ['name' => 'Kealakekua', 'state_id' => 12],
                ['name' => 'Kapaau', 'state_id' => 12],
                ['name' => 'Kurtistown', 'state_id' => 12],
                ['name' => 'Laupahoehoe', 'state_id' => 12],
                ['name' => 'Mountain View', 'state_id' => 12],
                ['name' => 'Naalehu', 'state_id' => 12],
                ['name' => 'Ninole', 'state_id' => 12],
                ['name' => 'Ookala', 'state_id' => 12],
                ['name' => 'Paauilo', 'state_id' => 12],
                ['name' => 'Pahala', 'state_id' => 12],
                ['name' => 'Pahoa', 'state_id' => 12],
                ['name' => 'Papaaloa', 'state_id' => 12],
                ['name' => 'Papaikou', 'state_id' => 12],
                ['name' => 'Pepeekeo', 'state_id' => 12],
                ['name' => 'Volcano', 'state_id' => 12],
                ['name' => 'Aiea', 'state_id' => 12],
                ['name' => 'Ewa Beach', 'state_id' => 12],
                ['name' => 'Kapolei', 'state_id' => 12],
                ['name' => 'Haleiwa', 'state_id' => 12],
                ['name' => 'Hauula', 'state_id' => 12],
                ['name' => 'Kaaawa', 'state_id' => 12],
                ['name' => 'Kahuku', 'state_id' => 12],
                ['name' => 'Kailua', 'state_id' => 12],
                ['name' => 'Kaneohe', 'state_id' => 12],
                ['name' => 'Kunia', 'state_id' => 12],
                ['name' => 'Laie', 'state_id' => 12],
                ['name' => 'Pearl City', 'state_id' => 12],
                ['name' => 'Wahiawa', 'state_id' => 12],
                ['name' => 'Mililani', 'state_id' => 12],
                ['name' => 'Waialua', 'state_id' => 12],
                ['name' => 'Waianae', 'state_id' => 12],
                ['name' => 'Waimanalo', 'state_id' => 12],
                ['name' => 'Waipahu', 'state_id' => 12],
                ['name' => 'Honolulu', 'state_id' => 12],
                ['name' => 'Jbphh', 'state_id' => 12],
                ['name' => 'Wheeler Army Airfield', 'state_id' => 12],
                ['name' => 'Schofield Barracks', 'state_id' => 12],
                ['name' => 'Fort Shafter', 'state_id' => 12],
                ['name' => 'Tripler Army Medical Center', 'state_id' => 12],
                ['name' => 'Camp H M Smith', 'state_id' => 12],
                ['name' => 'Mcbh Kaneohe Bay', 'state_id' => 12],
                ['name' => 'Wake Island', 'state_id' => 12],
                ['name' => 'Anahola', 'state_id' => 12],
                ['name' => 'Eleele', 'state_id' => 12],
                ['name' => 'Hanalei', 'state_id' => 12],
                ['name' => 'Hanamaulu', 'state_id' => 12],
                ['name' => 'Hanapepe', 'state_id' => 12],
                ['name' => 'Princeville', 'state_id' => 12],
                ['name' => 'Kalaheo', 'state_id' => 12],
                ['name' => 'Kapaa', 'state_id' => 12],
                ['name' => 'Kaumakani', 'state_id' => 12],
                ['name' => 'Kealia', 'state_id' => 12],
                ['name' => 'Kekaha', 'state_id' => 12],
                ['name' => 'Kilauea', 'state_id' => 12],
                ['name' => 'Koloa', 'state_id' => 12],
                ['name' => 'Lawai', 'state_id' => 12],
                ['name' => 'Lihue', 'state_id' => 12],
                ['name' => 'Makaweli', 'state_id' => 12],
                ['name' => 'Waimea', 'state_id' => 12],
                ['name' => 'Haiku', 'state_id' => 12],
                ['name' => 'Hana', 'state_id' => 12],
                ['name' => 'Hoolehua', 'state_id' => 12],
                ['name' => 'Kahului', 'state_id' => 12],
                ['name' => 'Kalaupapa', 'state_id' => 12],
                ['name' => 'Kaunakakai', 'state_id' => 12],
                ['name' => 'Kihei', 'state_id' => 12],
                ['name' => 'Kualapuu', 'state_id' => 12],
                ['name' => 'Lahaina', 'state_id' => 12],
                ['name' => 'Lanai City', 'state_id' => 12],
                ['name' => 'Makawao', 'state_id' => 12],
                ['name' => 'Maunaloa', 'state_id' => 12],
                ['name' => 'Paia', 'state_id' => 12],
                ['name' => 'Puunene', 'state_id' => 12],
                ['name' => 'Pukalani', 'state_id' => 12],
                ['name' => 'Kula', 'state_id' => 12],
                ['name' => 'Wailuku', 'state_id' => 12]
            ]);
        }
    }
}
