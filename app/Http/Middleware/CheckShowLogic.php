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
        if ($request->user() == null){
            abort(403);
        }elseif($request->user()->hasRole('manager') || $request->user()->hasRole('user') || $request->user()->hasRole('admin')){

        }else{
            abort(403);
        }
        

        // 如果不是 manager 或 admin，返回 403
        
    }
}
