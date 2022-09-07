<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class TravelPackageSeeder extends Seeder
{

    public function run()
    {
        //
        DB::table('travel_packages')->insert([
            'title' => 'User1',
            'slug' => 'user1',
            'location' => 'user1',
            'about' => 'user1',
            'featured_event' => 'user1',
            'language' => 'user1',
            'foods' => 'user1',
            'departure_date' => Carbon::parse('2000-01-01'),
            'duration' => 'user1',
            'type' => 'user1',
            'price' => 4000000,
            'created_at' => now(),
        ]);
    }
}
