<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Complaint extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['id'];

    public function registerMediaConversions(Media $media = null): void
    {
      $this->addMediaConversion('thumb')
      ->width(368)
      ->height(232)
      ->sharpen(10);


    }

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
