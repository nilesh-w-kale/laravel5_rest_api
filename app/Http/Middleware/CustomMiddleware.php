<?php

namespace App\Http\Middleware;

use Closure;

/*
**  use Illuminate\Support\Facades\Log; 
**  OR
*/
use Log;

class CustomMiddleware
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
        Log::info('Custom Middleware has been called');
        return $next($request);
    }
}
