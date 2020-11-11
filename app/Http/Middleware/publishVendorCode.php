<?php

namespace App\Http\Middleware;

use Closure;
use Hamelius\Demands\Console\Commands\DemandModuleInstall;

class publishVendorCode
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
        \Artisan::call('hamelius_demands:update');
        \Artisan::call('hamelius_lqe:update');

        return $next($request);
    }
}
