<?php

namespace App\Http\Middleware;

use Closure;

class UserCheck
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
        $total_cost = 28;

        if ($total_cost < 20){
            return redirect('about');
        }else{
            return $next($request);
        }

    }
}
