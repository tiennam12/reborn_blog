<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        return $this->userService = $userService;
    }

    public function edit($id)
    {
        $user = $this->userService->edit($id);

        return view('user.user-info', ['user' => $user]);            
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->only([
            'fullname',
            'nickname',
            'image'
        ]);

        $user = $this->userService->update($data, $id);

        return redirect()->route('users.edit', ['id' => $user->id])->with('msg', __('message.update_success'));
    }
}
