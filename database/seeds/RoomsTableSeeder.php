<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            [
                'hotel_id' => '1',
                'type' => 'Luxury Suite',
                'description' => '2000 sqft, 3 king sized beds, full kitchen.',
                'price' => '980',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'hotel_id' => '1',
                'type' => 'Double',
                'description' => 'Two queen beds.',
                'price' => '150',
                'image' => 'image2'
            ],
            [
                'hotel_id' => '2',
                'type' => 'No Bed',
                'description' => 'Empty Room',
                'price' => '10',
                'image' => 'image3'
            ],
            [
                'hotel_id' => '3',
                'type' => 'Five Bed',
                'description' => 'It has five beds',
                'price' => '350',
                'image' => 'image4'
            ],
            [
            'hotel_id' => '3',
            'type' => 'Five Bed',
            'description' => 'It has five beds',
            'price' => '350',
            'image' => 'image4'
            ]
        ];

        foreach ($rooms as $room) {
            Room::create(array(
                'hotel_id' => $room['hotel_id'],
                'type' => $room['type'],
                'description' => $room['description'],
                'price' => $room['price'],
                'image' => $room['image']
            ));
        }
    }
}
