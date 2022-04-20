<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagKategori extends Model
{
    use HasFactory;
    protected $table ="tag_kategoris";
    public $timestamps = false;
    protected $fillable = [
        'email'
    ];
}
