<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink_type extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function drink() {
        return $this->hasMany(Drink::class);
    }
}
