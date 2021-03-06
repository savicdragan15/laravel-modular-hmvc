<?php

/**
 * Return nav-here if current path begins with this path.
 *
 * @param string $path
 * @return string
 */
function setActive($path)
{
    return Request::is($path . '*') ? 'm-menu__item--open' :  '';
}

function setDisplayBlock($path)
{
    return Request::is($path . '*') ? 'style="display: block;"' :  '';
}

/**
 * Get
 * @return array
 */
function getAllRoutes()
{
  $routeArray = [];
  $allRoutes = Route::getRoutes();

  foreach ($allRoutes as $key => $route) {
    $routeArray[] = $route->getName();
  }

  return $routeArray;
}
