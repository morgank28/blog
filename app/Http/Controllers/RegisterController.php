<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegisterPage()
    {
        return view('register');
    }

    public function storeData(Request $request)
{
    $request->validate([
        'fname' => 'required|string|max:40',
        'lname' => 'required|string|max:255',
        'phone' => 'required|numeric|min:9',
        'email' => 'required|email|unique:users|max:255',
        'password' => 'required|min:8|same:password'
        // 'confirmPassword' => 'required|min:8|same:password',
    ]);

    // if ($validator->fails()) {
    //     return redirect('register')
    //                 ->withErrors($validator)
    //                 ->withInput();
    // }

    $user = new User();
    $user->fname = $request->fname;
    $user->lname = $request->lname; 
    $user->phone = $request->phone;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();

    // Redirect the user to the login page
    return redirect()->route('login')->with('success', 'Your account has been created successfully. Please log in to continue.');
}
}
