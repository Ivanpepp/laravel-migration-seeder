<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Trip;

use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i =0; $i< 250; $i++){
            $newTrip = new Trip();
            $newTrip->title = $faker->words(5, true);
            $newTrip->location = $faker->words(2, true);
            $newTrip->description = $faker->paragraphs(4, true);
            $newTrip->url = $faker->imageUrl();
            $newTrip->title_review = $faker->words(3, true);
            $newTrip->review = $faker->paragraphs(2, true);;
            $newTrip->date_review = $faker->date();


            $newTrip->slug=Str::slug($newTrip->title, '-');
            $newTrip->save();
        }
    }
}
