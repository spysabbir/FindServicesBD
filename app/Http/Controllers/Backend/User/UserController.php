<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userDashboard() {
        return view('backend.user.dashboard');
    }
}
