<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

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

// $fechaValidacion = Carbon::createFromDate(2016,11,15);

    // $now = Carbon();
    //
    // if (condition) {
    //   session()->flash('flash_msg','No se puede eliminar el todo, ya paso el tiempo permitido');
    //   return back();
    // }
        return $next($request);
    }
}
