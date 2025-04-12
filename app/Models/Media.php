<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{

  protected $table = 'media';
  protected $guarded = false; 

  protected static function booted()
  {
    static::deleting(function ($media) {
      if ($media->url) {
        Storage::disk('public')->delete($media->url);
      }
    });
  }


}
