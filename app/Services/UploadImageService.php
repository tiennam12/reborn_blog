<?php

namespace App\Services;

use Exception;

class UploadImageService
{
	public function upload($file) {
		$destinationFolder = public_path() . '/' . config('user.image_path');

        try {
            $fileName = $file->getClientOriginalName() . '_' . date('Ymd_His');
            $imageFileType = $file->getClientOriginalExtension();

            if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif') {

                $result = [
                    'status' => false,
                    'msg' => __('message.upload_fail'),
                ];
            }

            $file->move($destinationFolder, $fileName);
            $result = [
                'status' => true,
                'file_name' => $fileName,
            ];
        } catch(Exception $e) {
            $msg = $e->getMessage();

            $result = [
                'status' => false,
                'msg' => $msg,
            ];
        }

        return $result;
	}
}
