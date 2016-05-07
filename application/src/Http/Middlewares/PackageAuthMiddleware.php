<?php

/**
 * An example Authentication Middleware for the package.
 * Feel free to add more middlewares to your package
 * 
 * @author Neelkanth Kaushik
 * @since 1.0.0
 */

namespace Package\Application\Http\Middlewares;

use Closure;
use Illuminate\Support\Facades\Auth;

class PackageAuthMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        if (!Auth::check()) {

            if ($request->ajax()) {
                return response('Unauthorized Ajax Access.', 401);
            } else {

                return response('Unauthorized Access.', 401);
            }
        }

        return $next($request);
    }

}
