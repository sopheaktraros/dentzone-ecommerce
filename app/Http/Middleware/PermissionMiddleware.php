<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @param $permission
     * @param null $action
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $permission,$action=null)
    {
        if($permission !== null && !$request->user()->hasPermissionTo($permission,$action)) {
            abort(403);
        }
        return $next($request);
    }
}
