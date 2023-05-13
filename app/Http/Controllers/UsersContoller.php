<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showUsers(Request $request)
    {
        $user = User::all();

        return view('users',['users' => $user]);
    }
}