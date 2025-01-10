<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use App\Models\User;
class CheckShowLogic
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
    // 如果沒有登入的用戶，返回 403
    if ($request->user() === null) {
        abort(403);
    }

    // 如果用戶擁有 'manager', 'user', 或 'admin' 角色，則繼續
    if ($request->user()->hasRole('manager') || $request->user()->hasRole('user') || $request->user()->hasRole('admin')) {
        return $next($request);
    }

    // 其他情況，返回 403
    abort(403);
}

}
