<?php

use Illuminate\Database\Seeder;
use \App\Episode;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Episode::class,100)->create();
    }
}
