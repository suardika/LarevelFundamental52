<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdministrator
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
//        $request->user();
        $user =  $request->user();

//        if ($user && $user->isAdmin == "JohnAdministratorDoe")
        if ($user && $user->username == "JohnAdministratorDoe"){
            return $next($request);
        }
        abort(404, 'No way.');

    }
}
