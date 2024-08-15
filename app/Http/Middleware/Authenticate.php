<?php
namespace App\Http\Middleware;
// use App\Http\Middleware\Authenticate as Authentication as Middleware;
use Closure;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
    //  */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return view('login');
    //     }
    // }
    public function handle(Request $request, Closure $next)
    {

        if (Auth::check()){
            return redirect('/admin/dashboard');
        }

        return $next($request);
    }
}
