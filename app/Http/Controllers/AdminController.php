<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\User;
use App\Comment;
use App\Services\PostService;

class AdminController extends Controller
{   
    protected $postService;

    public function index() {   
        $users = User::count();
        $posts = Post::count();
        $tags = Tag::count();
        $comments = Comment::count();
        $data = [
            'users' => $users,
            'posts' => $posts,
            'tags' => $tags,
            'comments' => $comments,
        ];    

        return view('admin.home', $data);
    }
}
