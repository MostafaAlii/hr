<?php

namespace App\Http\Requests\Dashboard\Auth;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeLoginRequrest extends FormRequest
{
    public function rules() {
        return [
            'email' => 'required|email|exists:employees,email',
            'password' => 'required',
        ];
    }

    public function messages() {
        return [
            'email.required' => trans('dashboard/auth.email_required'),
            'email.email' => trans('dashboard/auth.real_email'),
            'email.exists' => trans('dashboard/auth.email_exists'),
            'password.required' => trans('dashboard/auth.password_required'),
        ];
    }
}