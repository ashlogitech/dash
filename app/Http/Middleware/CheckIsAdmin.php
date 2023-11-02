<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIsAdmin
{
    public function handle($request, Closure $next)
{
    if (!auth()->user()->is_admin) {
        return redirect('/home'); // or wherever you want to redirect non-admins
    }

    return $next($request);
}

}
