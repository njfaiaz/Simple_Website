<?php

namespace App\Http\Middleware;

use App\Models\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $expireTime = Carbon::now()->addSeconds(30);
            Cache::put('user-is-online' . Auth::user()->id, true,$expireTime);
            User::where('id',Auth::user()->id)->update(['last_seen' => Carbon::now()]);
         }


        if (Auth::check() && Auth::user()->role == 'user') {
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}
