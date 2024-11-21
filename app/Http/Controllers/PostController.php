<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {


        $searchTerm = $request->input('search', '');

        // تعديل الاستعلام ليشمل اسم الفئة واسم المستخدم
        $posts = Post::with(['category', 'user'])
                    ->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('content', 'like', '%' . $searchTerm . '%')
                    ->orWhereHas('user', function ($query) use ($searchTerm) {
                        $query->where('name', 'like', '%' . $searchTerm . '%');
                    })
                    ->orWhereHas('category', function ($query) use ($searchTerm) {
                        $query->where('name', 'like', '%' . $searchTerm . '%');
                    })
                    ->get();

        return view('posts.index', compact('posts', 'searchTerm'));
    }
}



