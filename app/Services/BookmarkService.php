<?php

namespace App\Services;

use App\Bookmark;

class BookmarkService
{
	public function store($data) {
		try {
        	$bookmark = Bookmark::find($data['user_id']);
        	$bookmark->posts()->attach([$bookmark->id, $data['post_id']]);
		} catch (\Exception $e) {
			\Log::error($e);
		}

		return $result = true;
	}
}
