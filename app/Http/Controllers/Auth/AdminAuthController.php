<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Auth\AdminLoginRequrest;
class AdminAuthController extends Controller {
    public function index() {
        return view('dashboard.admin.auth.admin_login');
    }

    public function login(AdminLoginRequrest $request) {
        $check = $request->all();
        if (auth('admin')->attempt(['email' => $check['email'], 'password' => $check['password'], 'status' => '1'])) {
            return redirect()->route('admin.dashboard');
        } elseif (['email' => $check['email'], 'password' => $check['password'], 'status' => '0']) {
            return back()->withErrors(['email' => trans('dashboard/auth.your_acount_is_not_active')]);
        } else {
            return back()->withErrors(['email' => trans('dashboard/auth.wrong_email_or_password')]);
        }
    }

    public function logout() {
        auth('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function admin_dashboard() {
        return view('dashboard.admin.dashboard_admin_index');
    }
}