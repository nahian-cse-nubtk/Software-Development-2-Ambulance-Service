<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmbulanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ambulances')->insert([
            [
                'provider_name' => 'Fast Rescue Services',
                'ambulance_number' => 'AMB123456',
                'vehicle_type' => 'Van',
                'contact_number' => '0123456789',
                'is_available' => true,
            ],
            [
                'provider_name' => 'Speedy Ambulance',
                'ambulance_number' => 'AMB234567',
                'vehicle_type' => 'Truck',
                'contact_number' => '0987654321',
                'is_available' => false,
            ],
            [
                'provider_name' => 'Quick Response Ambulance',
                'ambulance_number' => 'AMB345678',
                'vehicle_type' => 'Van',
                'contact_number' => '0112233445',
                'is_available' => true,
            ],
            [
                'provider_name' => 'Care Ambulance Service',
                'ambulance_number' => 'AMB456789',
                'vehicle_type' => 'Van',
                'contact_number' => '0778899000',
                'is_available' => true,
            ]
        ]);
    }
}
