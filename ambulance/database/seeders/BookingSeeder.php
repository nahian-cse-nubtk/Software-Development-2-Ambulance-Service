<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            [
                'name' => 'John Doe',
                'phone' => '0123456789',
                'location' => 'Khulna, Bangladesh',
                'emergency' => 'Heart Attack',
            ],
            [
                'name' => 'Jane Smith',
                'phone' => '0987654321',
                'location' => 'Dhaka, Bangladesh',
                'emergency' => 'Accident on the highway',
            ],
            [
                'name' => 'Michael Johnson',
                'phone' => '0112233445',
                'location' => 'Chittagong, Bangladesh',
                'emergency' => 'Stroke symptoms',
            ],
            [
                'name' => 'Emily Davis',
                'phone' => '0778899000',
                'location' => 'Sylhet, Bangladesh',
                'emergency' => 'Severe bleeding from an injury',
            ]
        ]);
    }
}
