<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_types')->insert([
            'name' => 'Single Room',
            'image' => 'images/rooms/single.jpg',
            'description' => 'Enjoy our convenient 40 m² single room, designed in warm beige tones and tailored to the needs of private and business travelers alike.',
            'price' => 120,
        ]);
        DB::table('room_types')->insert([
            'name' => 'Double Room',
            'image' => 'images/rooms/double.jpg',
            'description' => 'Double your enjoyment with 57 m² double bed room, designed in warm beige tones and tailored to the needs of couple and business travelers alike.',
            'price' => 200,
        ]);
        DB::table('room_types')->insert([
            'name' => 'Queen Room',
            'image' => 'images/rooms/queen.jpg',
            'description' => 'Treat yourself like a queen with our elegant queen rooms and wonderful city view.',
            'price' => 300,
        ]);
        DB::table('room_types')->insert([
            'name' => 'King Room',
            'image' => 'images/rooms/king.jpg',
            'description' => 'Our king size room provides views over landscaped gardens. It has a seating area, ample storage, digital safe and mini fridge.',
            'price' => 450,
        ]);
        DB::table('room_types')->insert([
            'name' => 'Executive Suite',
            'image' => 'images/rooms/executive-suite.jpg',
            'description' => 'A large apartment-like layout with separate living area, two bedrooms with attached bathrooms and fully-stocked kitchen.',
            'price' => 1500,
        ]);
        DB::table('room_types')->insert([
            'name' => 'President Suite',
            'image' => 'images/rooms/president-suite.jpg',
            'description' => 'Absolute best room. Designed in a luxurious style, providing the comfort and feel of a mansion with teak wood furniture and chic gold marble bathroom.',
            'price' => 3000,
        ]);
    }
}
