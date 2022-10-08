<?php

namespace App\Services\User;

use Traits, Exception;

class LogoutUser extends Traits
{
    public function execute(){
        try {
        
            auth()->user()->tokens()->delete();
            
            return $this->success("Successfully logged out");

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}