<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Complaint extends Model
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    

    
    public function panchayat()
    {
        return $this->belongsTo(Panchayat::class, 'panchayat_id');
    }

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class, 'complaint_id');
    }
}
