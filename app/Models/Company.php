<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_person',
        'mobile_number',
        'address',
        'email',
        'website_url',
        'country',
        'state',
        'city',
        'postal_code',
        'phone_number',
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
