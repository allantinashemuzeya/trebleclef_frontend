<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  Request  $request
     * @return string|null
     */
    protected function                redirectTo($request)
    {
        if (! $request->expectsJson()) {
            //check of the request object has a key called context
            // check if the $request->path() is has the string admin in it
            return str_contains($request->path(), 'admin') ? route('admin_login') : route('login');
        }
    }
}
