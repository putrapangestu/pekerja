<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlists';
    protected $fillable = [
        'id',
        'dari',
        'untuk',
    ];

    public function listings(){
        return $this->belongsTo('App\pekerja','untuk');
    }
    public function listingsdetails(){
        return $this->belongsTo('App\listingsdetails', 'dari');
    }    
}
