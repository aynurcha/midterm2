<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function rooms()
    {
        $this->BelongsTo(Room::class);
    }
}
