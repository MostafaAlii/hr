<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Auth\EmployeeLoginRequrest;
class EmployeeAuthController extends Controller {
    public function index() {
        return view('dashboard.employee.auth.employee_login');
    }

    public function login(EmployeeLoginRequrest $request) {
        $check = $request->all();
        if(auth('employee')->attempt(['email' => $check['email'], 'password' => $check['password'], 'status' => '1'])) {
            return redirect()->route('employee.dashboard');
        }
        elseif(['email' => $check['email'], 'password' => $check['password'], 'status' => '0']) {
            return back()->withErrors(['email' => trans('dashboard/auth.your_acount_is_not_active')]);
        }
         else {
            return back()->withErrors(['email' => trans('dashboard/auth.wrong_email_or_password')]);
        }
    }

    public function logout() {
        auth('employee')->logout();
        return redirect()->route('employee.login');
    }

    public function employee_dashboard() {
        return view('dashboard.employee.dashboard_employee_index');
    }
}