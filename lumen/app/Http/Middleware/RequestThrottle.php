<?php

namespace App\Http\Middleware;

use User;
use DB;
use Closure;
use Illuminate\Support\Facades\Auth;

class RequestThrottle
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

        // Get User Request for the last app.request_time_limit configuration
        $user_requests = DB::table('requests')->where('user_id', '=', Auth::user()->id)
                                              ->where('created_at', '>', config('app.request_time_limit'))->count();

        if ($user_requests >= config('app.request_limit')) {
            return response('Requests per hour limit exceeded.', 429);
        }

        return $next($request);
    }
}
