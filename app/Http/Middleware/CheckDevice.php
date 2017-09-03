<?php

namespace App\Http\Middleware;

use Closure;
use Jenssegers\Agent\Agent as Agent;

class CheckDevice
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
//        if ((new Agent())->isDesktop())
//            return redirect('sorry');

        return $next($request);
    }
}
