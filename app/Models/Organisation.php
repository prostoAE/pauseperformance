<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model {
    use HasFactory;

    public function market() {
        return $this->belongsToMany(Market::class);
    }

    public function group() {
        return $this->belongsTo(Group::class);
    }
}
