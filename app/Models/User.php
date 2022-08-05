<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Socialite\Facades\Socialite;

class User extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable;

    public const ROLE_ADMIN = 'admin';
    public const ROLE_EDITOR = 'editor';
    public const ROLE_VIEWER = 'viewer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'last_name',
        'birthday',
        'contact_number',
        'role',
        'avatar',
        'gender',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function register(string $name, string $email, string $password, string $companyName): self {
        $user = static::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'first_name' => null,
            'last_name' => null,
            'birthday' => null,
            'contact_number' => null,
            'role' => self::ROLE_VIEWER,
            'avatar' => '',
        ]);
        $user->companies()->create(['name' => $companyName]);

        return $user;
    }

    public static function registerByNetwork(string $network, \Laravel\Socialite\Two\User $data) {

        $user = static::create([
            'name' => $data->getName(),
            'email' => $data->getEmail(),
            'password' => Hash::make('secret'),
            'first_name' => null,
            'last_name' => null,
            'birthday' => null,
            'contact_number' => null,
            'gender' => null,
            'role' => self::ROLE_VIEWER,
            'avatar' => $data->getAvatar()
        ]);
        $user->companies()->create();

        return $user;
    }

    public function companies() {
        return $this->hasOne(Company::class);
    }

    public function groups() {
        return $this->hasMany(Group::class);
    }

    public function organisation() {
        return $this->hasMany(Organisation::class);
    }

}
