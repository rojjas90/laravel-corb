<?php

namespace App\Http\Middleware;

use Closure;

class Validation
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
// dd($request->all());

// $request['name'] = 'esta es un nuevo todo';

        return $next($request);
    }
}
