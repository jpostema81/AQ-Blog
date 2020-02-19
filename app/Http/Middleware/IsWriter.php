<?php

namespace App\Http\Middleware;

use Closure;

class IsWriter
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
        if ($request->user() && !$request->user()->is_writer) {
            abort(401, 'Only for writers.');
        }

        return $next($request);
    }
}
