<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            'name' => 'Stand Up Comedy cu Maria Popovici, Mincu, Banciu - Vlad Olteanu la Club 99',
            'photo' => 'https://static.iabilet.ro/img/auto_resized/db/event/01/68/24/00000246887-cf6a-720x405-wtm-8e9b6726.jpg',
            'price' => 25.00, 
		    'type' => 'student'
        ]);

        DB::table('tickets')->insert([
            'name' => 'Stand Up Comedy cu Maria Popovici, Mincu, Banciu - Vlad Olteanu la Club 99',
            'photo' => 'https://static.iabilet.ro/img/auto_resized/db/event/01/68/24/00000246887-cf6a-720x405-wtm-8e9b6726.jpg',
            'price' => 35.00, 
		    'type' => 'adult'
        ]);

        DB::table('tickets')->insert([
            'name' => 'Stand Up Comedy cu Maria Popovici, Mincu, Banciu - Vlad Olteanu la Club 99',
            'photo' => 'https://static.iabilet.ro/img/auto_resized/db/event/01/68/24/00000246887-cf6a-720x405-wtm-8e9b6726.jpg1',
            'price' => 25.00, 
		    'type' => 'pensionar'
        ]);

        DB::table('tickets')->insert([
            'name' => 'Stand Up cu George Dumitru, Geo Adrian si Victor Băra',
            'photo' => 'https://static.iabilet.ro/img/auto_resized/db/event/01/67/11/00000245745-f662-720x405-wtm-5f988a9b.png',
            'price' => 50.00,
		    'type' => 'adult'
        ]);
    }
}
