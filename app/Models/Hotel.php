<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    /** @use HasFactory<\Database\Factories\HotelFactory> */
    use HasFactory;
    public function rooms()
    {
        $this->hasMany(Room::class);

    }
    public function bookings()
    {
        $this->hasMany(Booking::class);

    }

    public function cities()
    {
        $this->BelongsTo(City::class);

    }
}
