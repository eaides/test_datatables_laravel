<?php

/*
|--------------------------------------------------------------------------
| Detect Active Route
|--------------------------------------------------------------------------
|
| Compare given route with current route and return output if they match.
| Very useful for navigation, marking if the link is active.
|
*/

/*
|--------------------------------------------------------------------------
| Detect Active Route
|--------------------------------------------------------------------------
|
| Compare given route with current route and return output if they match.
| Very useful for navigation, marking if the link is active.
|
*/

use Illuminate\Support\Facades\Route;

if (!function_exists('isActiveRoute')) {
    function isActiveRoute($route, $output = "active")
    {
        if (Route::currentRouteName() == $route) return $output;
    }

}

/*
|--------------------------------------------------------------------------
| Detect Active Routes
|--------------------------------------------------------------------------
|
| Compare given routes with current route and return output if they match.
| Very useful for navigation, marking if the link is active.
|
*/
if (!function_exists('isActiveRoute')) {
    function areActiveRoutes(Array $routes, $output = "active")
    {
        foreach ($routes as $route)
        {
            if (Route::currentRouteName() == $route) return $output;
        }
    }
}
