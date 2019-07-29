<?php

if (!function_exists('showAvatar')) {
	function showAvatar($provider) {
		if ($provider) {
			$imagePath = auth()->user()->image;
		} else {
			if (auth()->user()->image) {
				$imagePath = asset('image/' . auth()->user()->image);
			} else {
				$imagePath = asset('image/profile.png');
			}
		}

		return $imagePath;
	}
}
