<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class Employee {
    public function handle(Request $request, Closure $next) {
        if(!auth('employee')->check()) {
            return redirect()->route('employee.login');
        }
        return $next($request);
    }
}