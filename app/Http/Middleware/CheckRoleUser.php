<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRoleUser
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $role = Auth::user()->role;
        if ($role == 3) {
            return $next($request);
        }
        return redirect()->back()->with('errorRole', 'Tài khoản của bạn không đủ quyền truy cập !!!');
    }
}
