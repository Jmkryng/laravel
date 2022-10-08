<?php

namespace App\Services\User;

use Traits, Exception, Hash;

use App\Models\User\User;

class RegisterUser extends Traits
{
    public function execute($request){
        try {
        
            $user = User::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return $this->success("Successfully Registered", $user);

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}