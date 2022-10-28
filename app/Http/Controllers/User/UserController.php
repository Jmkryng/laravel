<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

// * Interface
use App\Interfaces\UserInterface;

// * Request
use App\Http\Requests\User\RegistrationUserRequest,
    App\Http\Requests\User\LoginUserRequest,
    App\Http\Requests\User\UpdateUserRequest;

class UserController extends Controller
{
    private $interface;

    public function __construct(UserInterface $userInterface){
        $this->interface = $userInterface;
    }

    protected function login(LoginUserRequest $request) {
        return $this->interface->login($request);
    }

    protected function logout() {
        return $this->interface->logout();
    }

    protected function register(RegistrationUserRequest $request) {
        return $this->interface->register($request);
    }

    protected function update(UpdateUserRequest $request) {
        return $this->interface->update($request);
    }
}
