<?php

namespace App\Http\Middleware;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class CheckLogic
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

    // 檢查是否是 manager 或 admin
    if ($request->user()->hasRole('manager') || $request->user()->hasRole('admin')) {
        // 如果是 manager 或 admin，繼續處理請求
        return $next($request);
    }

    // 如果不是 manager 或 admin，返回 403
    abort(403);
}

}