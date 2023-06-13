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
}
