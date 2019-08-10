<?php

if (!function_exists('showAvatar')) {
	function showAvatar($provider = null) {
		if ($provider) {
			$imagePath = auth()->user()->image;
		} else {
			if (auth()->user()->image) {
				$imagePath = asset('images/' . auth()->user()->image);
			} else {
				$imagePath = asset('images/profile.png');
			}
		}

		return $imagePath;
	}
}

if (!function_exists('imagePath')) {
	function imagePath() {
		return asset('images/');
	}
}
