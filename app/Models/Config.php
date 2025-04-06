<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{

  protected $table = 'config';
  protected $guarded = false; 

  public static function get(string $key, $default = null)
  {
    return self::where('key', $key)->value('value') ?? $default;
  }

  public static function set(string $key, $value): void
  {
    self::updateOrCreate(['key' => $key], ['value' => $value]);
  }


}
