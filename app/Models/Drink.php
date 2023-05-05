<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function transaction() {
        return $this->hasMany(Transaction::class);
    }

    public function drink_type() {
        return $this->belongsTo(Drink_type::class);
    }

    public static function find($temp ,$id) {
        $drinks = Drink::all();
        return $drinks->Where($temp, $id);
    }
}
