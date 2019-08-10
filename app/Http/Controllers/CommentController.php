<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CommentService;
use App\User;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
    protected $serviceComment;

    public function __construct(CommentService $commentService) {
        return $this->serviceComment = $commentService;
    }

    public function store(Request $request) {
        $post = Post::findOrFail($request->get('post_id'));

        $data = $request->only([
            'content',
            'post_id',
        ]);

        $result = $this->serviceComment->store($data);

        $result = [
            'comment' => $result['comment'],
            'status' => $result['status']
        ];

        return response()->json($result);
    }
}
