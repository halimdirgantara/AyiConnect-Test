<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubDomainExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $server = explode('.', $request->server('HTTP_HOST'));
        $subdomain = $server[0];

        // check if sub domain exists, replace with your own conditional check
        if (! User::where('subdomain', $subdomain)->first()) {
            return abort(404); // or redirect to your homepage route.
        }

        Session::put('subdomain', $subdomain);
        return $next($request);
    }
}
