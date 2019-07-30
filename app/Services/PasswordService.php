<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use App\User;
use Exception;

class PasswordService 
{
	public function edit($id)
	{
		$user = User::findOrFail($id);

		return $user;
	}

	public function changePassword($data, $id)
	{
		$user = User::findOrFail($id);

		if (!Hash::check($data['old_password'], $user->password)) {
			return back()->with('err', __('message.update_fail'));
		}

		try {
			$user->password = Hash::make($data['password']);
			$user->save();
		} catch (Exception $e) {
			return back()->with('err', __('message.update_fail'));
		}

		return back()->with('msg', __('message.update_success'));
	}
}
