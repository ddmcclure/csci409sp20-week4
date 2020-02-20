<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservations = [
            [
                'user_id' => '1',
                'room_id' => '1',
                'num_of_guests' => '4',
                'arrival' => '5/18/2020',
                'departure' => '5/28/2020'
            ],
            [
                'user_id' => '1',
                'room_id' => '2',
                'num_of_guests' => '1',
                'arrival' => '5/10/2020',
                'departure' => '5/12/2020'
            ],
            [
                'user_id' => '1',
                'room_id' => '3',
                'num_of_guests' => '3',
                'arrival' => '5/6/2020',
                'departure' => '5/7/2020'
            ],
            [
                'user_id' => '1',
                'room_id' => '4',
                'num_of_guests' => '2',
                'arrival' => '5/12/2020',
                'departure' => '5/15/2020'
            ],
            [
                'user_id' => '1',
                'room_id' => '2',
                'num_of_guests' => '2',
                'arrival' => '5/20/2020',
                'departure' => '5/24/2020'
            ]
        ];

        foreach($reservations as $reservation) {
            Reservation::create(array(
               'user_id' => $reservation['user_id'],
               'room_id' => $reservation['room_id'],
               'num_of_guests' => $reservation['num_of_guests'],
               'arrival' => $reservation['arrival'],
               'departure' => $reservation['departure']
            ));
        }
    }
}
