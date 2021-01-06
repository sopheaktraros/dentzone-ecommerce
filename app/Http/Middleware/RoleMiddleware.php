<?php


namespace App\Http\Middleware;

use Closure;
class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * @param $request
     * @param Closure $next
     * @param mixed ...$roles
     * @return mixed
     */
    public function handle($request, Closure $next, ... $roles)
    {
        if(!$request->user()->hasRole(...$roles)) {
            abort(403,'Sorry, You don\'t have role to accessing this page. Please contact to administrator for information.');
        }
        return $next($request);
    }
}
