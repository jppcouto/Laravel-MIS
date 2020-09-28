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
        $users = User::findOrFail($id);
        return view('admin.edit')->with('users',$users);
    }

    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/role-register')->with('status','Your data was updated!');
    }
}
