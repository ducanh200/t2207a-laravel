<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        //kiểm tra xem ué đăng nhập có phải admin không, nếu không thì không cho vào
        if (!auth()->check()) // kiểm tra đăng nhập hay chưa
            return redirect()->to("/login");
        $u = auth()->user();//Lấy tài khoản đăng nhập
        if ($u->role !="admin")
            return abort(404);
        return $next($request);
    }
}
