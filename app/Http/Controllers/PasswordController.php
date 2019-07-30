<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Services\PasswordService;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    protected $passwordService;

    public function __construct(PasswordService $passwordService)
    {
        return $this->passwordService = $passwordService;
    }

    public function edit($id)
    {
        $user = $this->passwordService->edit($id);

    	return view('user.user-password', ['user' => $user]);
    }

    public function changePassword(UpdatePasswordRequest $request, $id)
    {
    	$data = $request->only([
    		'old_password',
    		'password',
    	]);

        return $this->passwordService->changePassword($data, $id);
    }
}
