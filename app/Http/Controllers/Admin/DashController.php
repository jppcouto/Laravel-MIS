<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashController extends Controller
{
    public function register()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
}
