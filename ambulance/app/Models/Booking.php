<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Define which fields can be mass-assigned
    protected $fillable = ['name', 'phone', 'location', 'emergency'];

    // Define the relationship to the User model
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}

