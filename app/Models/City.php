<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function hotels()
    {
        $this->HasMany(Hotel::class);

    }
}
