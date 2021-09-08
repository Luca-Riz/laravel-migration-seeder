<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i++){

            // creo istanza
            $newTrip = new Trip();

            // popolo con dati fake
            $newTrip->title = 'viaggio n. ' . $i;
            $newTrip->where = 'stato della pianeta terra  n.' . rand(1,195);
            // $newTrip->cost = rand(50,10000) . '€';
            // $newTrip->from = '2021-10-01';
            // $newTrip->to = '2021-10-21';
            $newTrip->aviable = 1;
            $newTrip->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat in ea sunt reprehenderit incidunt quaerat impedit aliquam perferendis commodi laboriosam dicta sint blanditiis tempora nostrum labore, atque distinctio recusandae iure?";

            // salvo istanza nella tabella
            $newTrip->save();

        }
    }
}
