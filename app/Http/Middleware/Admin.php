<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class Admin {
    public function handle(Request $request, Closure $next) {
        if(!auth('admin')->check()) {
            return redirect()->route('admin.login');
        }
        return $next($request);
    }
}