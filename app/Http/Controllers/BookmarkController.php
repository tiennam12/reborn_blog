<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookmark;
use App\User;

class BookmarkController extends Controller
{
    public function index()
    {   
        $user = User::findOrFail(auth()->id());

        $posts = $user->bookmark->posts()->distinct('post_id')->get();

        return view('user.home', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
    	$data = $request->only([
    		'post_id',
    	]);

        $data['user_id'] = auth()->id();

        $bookmark = Bookmark::find($data['user_id']);

        $bookmark->posts()->attach([$data['post_id'], $bookmark->id]);

        $result = [
            'status' => true,
        ];

    	return response()->json($result);
    }
}
