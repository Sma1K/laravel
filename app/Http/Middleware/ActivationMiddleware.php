<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class ActivationMiddleware
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
        if(Auth::check()){
            $user=Auth::user();
            if($user->is_active)
            {
                return $next($request);
            }
            else
            {

                return redirect('/activateAccount');
            }
        }
    }
}
