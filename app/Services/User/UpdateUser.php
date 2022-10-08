<?php

namespace App\Services\User;

use Traits, Exception, Hash;

use App\Models\User\User;

class UpdateUser extends Traits
{
    public function execute($request){
        try {

            $user = User::findOrFail(auth()->user()->id);
           
            $user->update([
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => Hash::make($request->password)
            ]);

            auth()->user()->tokens()->delete();

            $token = $user->createToken('user')->plainTextToken;

            return $this->success("Successfully updated user", [
                'user'         => $user,
                'access_token' => $token,
                'token_type'   => 'bearer'
            ]);

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}