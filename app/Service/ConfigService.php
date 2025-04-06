<?php

namespace App\Service;

use App\Models\Config;

class ConfigService
{

  public function get(string $key, $default = null)
  {
    return Config::get($key, $default);
  }

  public function set(string $key, $value): void
  {
  	if( isset($value) ){
      Config::set($key, $value);
	}
  }

}
