<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function showHomePage() {
        return view('/home', [
            'posts' => Post::with(['user'])->latest()->get()
        ]);
    }
}
