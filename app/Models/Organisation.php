<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Organisation extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'group_id',
        'currency',
        'active'
    ];

    public static function getCurrencyList() {
        return [
            'eur',
            'usd',
            'dkk'
        ];
    }

    public static function getOrganisationsWithGroup() {
        $user = Auth::user();
        $data = [];

        $user->groups()->each(function ($item, $key) use (&$data, $user) {
            if (Organisation::where('user_id', '=', $user->id)->where('group_id', '=', $item->id)->exists()) {
                $orgs = Organisation::where('user_id', '=', $user->id)->where('group_id', '=', $item->id)->get();
                $data[$item->name] = $orgs;
            }
        });

        return $data;
    }

    public function markets() {
        return $this->hasMany(Market::class);
    }

    public function group() {
        return $this->belongsTo(Group::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
