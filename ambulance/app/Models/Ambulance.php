<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    use HasFactory;

    // Define the fields that can be mass-assigned
    protected $fillable = ['provider_name', 'ambulance_number', 'vehicle_type','contact_number', 'is_available'];
}