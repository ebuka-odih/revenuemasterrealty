<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.user.list', compact('users'));
    }

    public function userDetail($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.show', compact('user'));
    }


}
