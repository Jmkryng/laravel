<?php

namespace App\Services\User;

use Traits, Exception, Auth;

use App\Models\User\User;

class LoginUser extends Traits
{
    public function execute($request){
        try {

            if (!Auth::attempt($request->only('email', 'password'))) {
                return $this->error('Invalid login details', 401);
            }

            $user  = User::where('email', $request->email)->firstOrFail();
            $token = $user->createToken('user')->plainTextToken;

            return $this->success("Successfully logged in", [
                'user'         => $user,
                'access_token' => $token,
                'token_type'   => 'bearer'
            ]);

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}