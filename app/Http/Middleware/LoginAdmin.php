<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LoginAdmin
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
        if (Auth::check())
        {
            $role=Auth::user()->role;
            if ($role=3){
                return $next($request);
            }
            else if ($role==2)
            {
                return $next($request);
            }
            else
            {
                return redirect()->back()->with('errorRole','Tài khoản của bạn không đủ quyền ');
            }
        }
        return redirect()->route('getFormAdmin');

    }
}
