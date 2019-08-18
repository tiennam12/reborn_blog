<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthorController extends Controller
{
    public function show($id)
    {
    	$user = User::find($id);

    	$posts = $user->posts;

    	return view('user.user-article', ['posts' => $posts]);
    }
}
