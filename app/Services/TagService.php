<?php

namespace App\Services;

use App\Tag;
use Log;

class TagService
{
    public function destroy($id) {
        $delFlag = false;

        try {
            $tag = Tag::find($id);
            $tag->delete();
            $delFlag = true;
        } catch (Exception $e) {
            Log($e);
        }
        
        return $delFlag;
    }

    public function store($data) { 
        try {
            $tag = Tag::create($data);
        } catch (Exception $e) {
            return false;
        }
        
        return $tag;
    }

    public function show($id) {
        try {
            $tag = Tag::find($id);
        } catch (Exception $e) {
            return false;
        }

        return $tag;
    }

    public function edit($id) {
        try {
            $tag = Tag::find($id);
        } catch (Exception $e) {
            return false;
        }

        return $tag;
    }

    public function update($id, $data) { 
        try {
            $tag = Tag::find($id);
            $tag->update($data);
        } catch (Exception $e) {
            return false;
        }
        
        return $tag;
    }
}
