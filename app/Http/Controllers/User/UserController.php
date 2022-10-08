<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

// * Services
use App\Services\User\LoginUser,
    App\Services\User\LogoutUser,
    App\Services\User\RegisterUser,
    App\Services\User\UpdateUser;

// * Request
use App\Http\Requests\User\RegistrationUserRequest,
    App\Http\Requests\User\LoginUserRequest,
    App\Http\Requests\User\UpdateUserRequest;

class UserController extends Controller
{
    private $login, $logout, $register, $update;

    public function __construct(
        LoginUser           $loginUser,
        LogoutUser          $logoutUser,
        RegisterUser        $registerUser,
        UpdateUser          $updateUser
    ){
        $this->login          = $loginUser;
        $this->logout         = $logoutUser;
        $this->register       = $registerUser;
        $this->update         = $updateUser;
    }

    protected function login(LoginUserRequest $request) {
        return $this->login->execute($request);
    }

    protected function logout() {
        return $this->logout->execute();
    }
    
    protected function register(RegistrationUserRequest $request) {
        return $this->register->execute($request);
    }
    
    protected function update(UpdateUserRequest $request) {
        return $this->update->execute($request);
    }
}