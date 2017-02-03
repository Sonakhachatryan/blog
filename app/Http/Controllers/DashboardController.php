<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function getPosts()
    {
        $posts = Post::all();
        
        return response()->json(['success' => 1,'posts' => $posts]);
    }
}

