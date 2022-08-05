<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'organisation_id'
    ];

    public static function getByName($name) {
        return self::where('name', '=', $name)->first();
    }

    public function organisation() {
        return $this->belongsTo(Organisation::class);
    }
}
