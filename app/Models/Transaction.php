<?php

namespace App\Models;

use App\Models\User;
use App\Models\Drink;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function drink() {
        return $this->belongsTo(Drink::class);
    }

    public static function find($id) {
        $transactions = Transaction::all();
        return $transactions->where('user_id', $id);
    }
}
