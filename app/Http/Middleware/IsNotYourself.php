<?php

namespace App\Http\Middleware;

use Closure;

class IsNotYourself
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user() === \Auth::user()) {
            return $next($request);
        }

        return $next($request);
    }
}
