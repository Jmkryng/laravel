<?php

namespace App\Repositories\User;

use Traits, Exception, Hash, Auth;

// * Interfaces
use App\Interfaces\UserInterface;

// * Models
use App\Models\User\User;

class UserRepository extends Traits implements UserInterface
{
    public function login($request){
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


    public function logout(){
        try {

            auth()->user()->tokens()->delete();

            return $this->success("Successfully logged out");

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }


    public function register($request){
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


    public function update($request){
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