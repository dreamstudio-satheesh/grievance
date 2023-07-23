<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ward_id'];

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class, 'street_id');
    }
}
