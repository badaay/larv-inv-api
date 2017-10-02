<?php

namespace App\Http\Middleware;

use Closure;
use App\UserApps;
use Illuminate\Support\Facades\Auth;

class AppsMiddleware
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
        $apps = UserApps::all()->where('user_id', Auth::id());
        $request->session()->put('app_list', $apps);
        return $next($request);
    }
}
