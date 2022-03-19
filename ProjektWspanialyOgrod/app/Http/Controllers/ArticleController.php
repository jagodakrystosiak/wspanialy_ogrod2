<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class ArticleController extends Controller
{
    public function show($slug) {
        $comments = Comment::with('user')->where('slug', $slug)->get();
        return view('article',['slug' => $slug, 'comments' => $comments]);
    }
}
