<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guards=null)
    {
        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }

        if(Auth::guard($guards)->check()){
            if(Auth::user()->user_type == 'admin'){
                return redirect(RouteServiceProvider::HOME);
            }elseif(Auth::user()->user_type == 'user'){
            //    return redirect('/user/dashboard');
               return redirect(RouteServiceProvider::USER);
            }
        }

        return $next($request);
    }
}
