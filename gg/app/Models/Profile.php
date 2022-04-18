<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table ="profiles";
    public $timestamps = false;
    protected $primaryKey = 'email';

    protected $fillable = [
        'nama',
        'email',
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
        'kemampuan',
    ];
}
