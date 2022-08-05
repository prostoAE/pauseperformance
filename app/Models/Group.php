<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model {
    use HasFactory;

    public function organisation() {
        return $this->hasMany(Organisation::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
