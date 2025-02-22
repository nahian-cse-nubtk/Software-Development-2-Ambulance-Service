<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbulancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambulances', function (Blueprint $table) {
            $table->id(); // This creates an 'id' column as the primary key
            $table->string('provider_name'); // Provider name
            $table->string('ambulance_number')->unique(); // Unique ambulance number
            $table->string('vehicle_type'); // Vehicle type (e.g., van, truck)
            $table->string('contact_number'); // Contact number for the ambulance provider
            $table->boolean('is_available')->default(true); // Availability status (true = available, false = unavailable)
            $table->timestamps(); // Laravel will automatically add created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambulances'); // Drop the 'ambulances' table if it exists
    }
}
