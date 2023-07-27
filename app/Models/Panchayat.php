<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panchayat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function wards()
    {
        return $this->hasMany(Street::class, 'panchayat_id');
    }
}
