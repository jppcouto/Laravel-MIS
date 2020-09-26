<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }

    public function edit(Request $request, $id)
    {
        $id = User::findOrFail($id);
        return view('admin.edit');
    }
}
