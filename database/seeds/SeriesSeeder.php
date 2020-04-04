<?php

use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('series')->insert([
                [
                    'title' => 'Game of Thrones',
                    'description' => 'Nine noble families wage war against each other in order to gain control over the mythical land of Westeros. Meanwhile, a force is rising after millenniums and threatens the existence of living men',
                    'type' => 'series',
                    'airing_time_from' => 'Monday',
                    'airing_time_to' => 'Thursday',
                    'airing_time_hour' => '20:30'
                ],
                [
                    'title' => 'The Outsider',
                    'description' => 'Based on Stephen King\'s best-selling novel of the same name, "The Outsider" begins by following an investigation which at first seems like it will be simple and straightforward but things change as it leads into the gruesome murder of a young boy by a seasoned cop.',
                    'type' => 'series',
                    'airing_time_from' => 'Sunday',
                    'airing_time_to' => 'Wednesday',
                    'airing_time_hour' => '16:00'
                ],
                [
                    'title' => 'Lost',
                    'description' => 'Lost is an American serial drama television series that predominantly followed the lives of the survivors of a plane crash on a mysterious tropical island.',
                    'type' => 'series',
                    'airing_time_from' => 'Saturday',
                    'airing_time_to' => 'Tuesday',
                    'airing_time_hour' => '15:30'
                ],[
                    'title' => 'Sesame Street',
                    'description' => 'Sesame Street is one of the longest aired kids TV shows. This PBS production started in 1969 and is now airing on HBO. The success of this show lies in educating children through storytelling.',
                    'type' => 'tv show',
                    'airing_time_from' => 'Monday',
                    'airing_time_to' => 'Wednesday',
                    'airing_time_hour' => '12:30'
                ],
                [
                    'title' => 'The Doctors',
                    'description' => 'A team of medical professionals discusses health related topics and answers questions from the audience.',
                    'type' => 'tv show',
                    'airing_time_from' => 'Monday',
                    'airing_time_to' => 'Wednesday',
                    'airing_time_hour' => '18:30'
                ],
                [
                    'title' => 'Football Show',
                    'description' => 'Football is the most popular sport in the world and played, watched and loved by hundreds of millions of loyal fans and supporters every day.',
                    'type' => 'tv show',
                    'airing_time_from' => 'Monday',
                    'airing_time_to' => 'Wednesday',
                    'airing_time_hour' => '18:30'
                ]

            ]

        );
    }
}
