<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function employeeDashboard() {
        return view('backend.employee.dashboard');
    }

    public function employeeProfile() {
        return view('backend.employee.profile', [
            'user' => Auth::user(),
        ]);
    }
}
