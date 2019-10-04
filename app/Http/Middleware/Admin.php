<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< HEAD
use Auth;
=======
>>>>>>> 52c451f30ef3bc81c83ff0122a41770b61163467

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
<<<<<<< HEAD
    public function handle($request, Closure $next, $guard = 'admin')
    {    
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->route('admin-login');
            }
        } 

=======
    public function handle($request, Closure $next)
    {
>>>>>>> 52c451f30ef3bc81c83ff0122a41770b61163467
        return $next($request);
    }
}
