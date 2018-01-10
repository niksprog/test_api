<?php

namespace App\Http\Middleware;

use DB;
use Closure;
use Illuminate\Support\Facades\Auth;

class AfterRequestThrottle
{
    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        DB::table('requests')->insert([
            'user_id' => Auth::user()->id,
            'path' => $request->path(),
            'body' => json_encode($request->all()),
            'response' => json_encode($response)
        ]);

        return $response;
    }

}
