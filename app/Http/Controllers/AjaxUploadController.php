<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Image;

class AjaxUploadController extends Controller
{
    function action(Request $request) {
        $validation = Validator::make($request->all(), [
            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validation->passes()) {
            $image = $request->file('select_file');
            $newName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $newName);

            return response()->json([
                'message' => 'posts.image_upload_success',
                'image_path' => url('/') . '/' . config('posts.image_path') . $newName,
            ]);
        } else {
            return response()->json([
                'message' => $validation->errors()->all(),
            ]);
        }
    }
}
?>
