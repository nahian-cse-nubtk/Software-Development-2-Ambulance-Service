<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedbacks')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'message' => 'The ambulance service was quick and reliable. Very satisfied!',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'message' => 'Great service. The staff was very helpful during the emergency.',
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael@example.com',
                'message' => 'The ambulance arrived on time, and the driver was professional.',
            ],
            [
                'name' => 'Emily Davis',
                'email' => 'emily@example.com',
                'message' => 'Had a great experience. Thank you for the fast response.',
            ],
        ]);
    }
}
