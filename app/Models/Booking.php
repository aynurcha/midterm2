<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;
    public function users()
    {
        $this->hasMany(User::class);
    }
    public function hotel()
    {
        $this->hasMany(Hotel::class);
    }

}
