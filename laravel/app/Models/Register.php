<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class register extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table ="users";
    public $timestamps = false;

    protected $fillable = [
        'nama', 'user', 'email', 'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
