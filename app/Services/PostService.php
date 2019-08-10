<?php

namespace App\Services;

use App\Post;
use Log;

class PostService
{
    public function destroy($id) {
        $delFlag = false;

        try {
            $post = Post::find($id);
            $post->delete();
            $delFlag = true;
        } catch (Exception $e) {
            Log($e);
        }
        
        return $delFlag;
    }

    public function store($data) { 
        try {
            $post = Post::create($data);
        } catch (Exception $e) {
            return false;
        }
        
        return $post;
    }

    public function show($id) {
        try {
            $post = Post::findOrFail($id);
        } catch (Exception $e) {
            return false;
        }

        return $post;
    }

    public function edit($id) {
        try {
            $post = Post::findOrFail($id);
        } catch (Exception $e) {
            return false;
        }

        return $post;
    }

    public function update($id, $data) { 
        try {
            $post = Post::findOrFail($id);
            $post->update($data);
        } catch (Exception $e) {
            return false;
        }
        
        return $post;
    }
}
