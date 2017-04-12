<?php

namespace App\Http\Middleware;

use Closure;

class verifyUserStatus
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

        if(Auth::user()->status === 0){
            return redirect()->to('home');
        }
        return $next($request);
    }
}
