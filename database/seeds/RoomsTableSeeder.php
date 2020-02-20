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
                'type' => 'One Bed',
                'description' => 'It has one bed',
                'price' => '100',
                'image' => 'image'
            ],
            [
                'hotel_id' => '1',
                'type' => 'Two Bed',
                'description' => 'It has two beds',
                'price' => '150',
                'image' => 'image2'
            ],
            [
                'hotel_id' => '1',
                'type' => 'No Bed',
                'description' => 'Empty Room',
                'price' => '10',
                'image' => 'image3'
            ],
            [
                'hotel_id' => '1',
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
