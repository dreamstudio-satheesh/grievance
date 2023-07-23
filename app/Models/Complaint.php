<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

     protected $fillable = ['user_id', 'ward_id', 'street_id', 'subject', 'description', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function street()
    {
        return $this->belongsTo(Street::class, 'street_id');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class, 'complaint_id');
    }
}
