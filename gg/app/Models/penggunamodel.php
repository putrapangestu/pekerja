<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class penggunamodel extends Model
{
    public function allData()
    {
        return DB::table('users')->get();
    }

    public function deleteData($id)
    {
        DB::table('users')
        ->where('id', $id)
        ->delete();
    }
}
