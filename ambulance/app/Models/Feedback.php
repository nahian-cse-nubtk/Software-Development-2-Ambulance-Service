<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // Define which fields can be mass-assigned
    protected $fillable = ['name', 'email', 'message'];

    // Optionally, you can define the table if the model name doesn't follow the Laravel naming convention
    protected $table = 'feedbacks';

    // You can also define relationships here if needed, but for this example it's not necessary.
}

