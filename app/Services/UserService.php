<?php

namespace App\Services;

use App\Services\UploadImageService;
use App\User;
use Exception;
use Log;

class UserService
{
	protected $uploadImage;

	public function __construct(UploadImageService $uploadImage)
	{
		return $this->uploadImage = $uploadImage;
	}

	public function edit($id)
	{
		$user = User::findOrFail($id);

		return $user;
	}

	public function update($data, $id)
	{
        if (isset($data['image'])) {
            $uploaded = $this->uploadImage->upload($data['image']);

            if (!$uploaded['status']) {
                return back()->with('status', $uploaded['msg']);
            }

            $data['image'] = $uploaded['file_name'];
        }

        try {
            $user = User::find($id);
            $user->update($data);   
        } catch (Exception $e) {
            Log::error($e);
        }

        return $user;
	}
}
