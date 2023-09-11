<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleWeight
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $weight): Response
    {
        $userRole = $request->user()?->user_role ?? 0;
        // 嘗試進入了不是身份組該進入
        if (!str_contains($weight, strval($userRole))) {
            // 若身分是管理員
            if ($userRole == '1') {
                return redirect(RouteServiceProvider::ADMIN);
            }
            // 身份不是管理員
            return redirect(RouteServiceProvider::HOME);
        }
        return $next($request);
    }
}
