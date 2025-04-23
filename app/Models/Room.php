<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nette\Schema\Schema;

class Room extends Model
{
    public function categories()
{
    $this->hasMany(Category::class);

}

    public function hotels()
{
    $this->BelongsTo(Hotels::class);

}
}
