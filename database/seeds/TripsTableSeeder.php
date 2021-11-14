<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $trips =[
            [
                'title' => 'Prova del Seeder caricato manualmente',
                'location' =>  'Seeder Land',
                'description' => 'luogo dei seeder',
                'url' => 'https://www.thecommandbrick.net/wp-content/uploads/2020/08/Come-Vedere-il-Seed-Minecraft.png',
                'title_review' => 'Bello il Seeder',
                'review' => 'molto comodo da usare',
                'date_review' => '2020/12/04',
            ],
            [
                'title' => 'Prova del Seeder caricato manualmente 2',
                'location' =>  'Seeder Land 2',
                'description' => 'luogo dei seeder 2',
                'url' => 'https://www.thecommandbrick.net/wp-content/uploads/2020/08/Come-Vedere-il-Seed-Minecraft.png',
                'title_review' => 'Bello il Seeder 2',
                'review' => 'molto comodo da usare 2',
                'date_review' => '2020/12/06',
            ],
            [
                'title' => 'Prova del Seeder caricato manualmente 3',
                'location' =>  'Seeder Land 3',
                'description' => 'luogo dei seeder 3',
                'url' => 'https://www.thecommandbrick.net/wp-content/uploads/2020/08/Come-Vedere-il-Seed-Minecraft.png',
                'title_review' => 'Bello il Seeder 3',
                'review' => 'molto comodo da usare 3',
                'date_review' => '2020/12/10',
            ],
        ];
        foreach ($trips as $trip){
            $newTrip = New Trip();
            /* $newTrip->title = $trip['title'];
            $newTrip->location = $trip['location'];
            $newTrip->description = $trip['description'];
            $newTrip->url = $trip['url'];
            $newTrip->title_review = $trip['title_review'];
            $newTrip->review = $trip['review'];
            $newTrip->date_review = $trip['date_review']; */

            $newTrip->fill($trip);
            $newTrip->slug = Str::slug( $trip['title'], '-' );
            $newTrip->save();
        }
    }
}
