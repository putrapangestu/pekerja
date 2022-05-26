<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    public $timestamps = true;

    public function User(){
        return $this->hasMany(User::class, 'email');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public function Profile(){
        return $this->belongsTo(Profile::class, 'email');
    }

    protected $fillable = [
        'name',
        'user',
        'email',
        'password',
        'name',
        'email',
        'foto',
        'hasil',
        'lulusansd',
        'lulusansmp',
        'lulusansma',
        'password',
        'lat',
        'lng'
    ];

    protected $nullable = [
    
    'pekerja',
    'ultah',
    'telepon',
    'alamat',
    'bidang',
    'keterangan',
    'twitter',
    'facebook',
    'google',
    'link',
    'instagram',
    'lulusansd',
    'sd',
    'lulusansmp',
    'smp',
    'lulusansma',
    'sma',
    'bio',
    'prestasi',
    'pengalaman',
    'kemampuan'
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

}