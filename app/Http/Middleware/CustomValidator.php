<?php

namespace App\Http\Middleware;

use Closure;

class CustomValidator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->age > 100)
            return $next($request);

        abort(403,'No smoking');
        //return $next($request);
    }
}
