<?php

namespace App\Services;

use App\Comment;

class CommentService
{
    public function store($data) {
        $status = false;

        try {
            $comment = new Comment;
            $comment->content = $data['content'];
            $comment->post_id = $data['post_id'];
            $comment->user_id = auth()->id();
            $comment->save();
            $comment = $comment->getComment($data['post_id']);
            $status = true;
        } catch (\Exception $e) {
            \Log::error($e);
        }

        $result = [
            'status' => $status,
            'comment' => $comment,
        ];

        return $result;
    }
}
