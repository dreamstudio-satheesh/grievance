<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;

    protected $guarded = ['id'];


    public function registerMediaConversions(Media $media = null): void
    {
      $this->addMediaConversion('thumb')
      ->width(368)
      ->height(232)
      ->sharpen(10);


    }
    
    
}
