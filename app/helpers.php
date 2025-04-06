<?php

/* Menu Active Helper */
if (!function_exists('set_active')) {
  function set_active($route)
  {
    return request()->routeIs($route) ? 'menu-active' : '';
  }
}


