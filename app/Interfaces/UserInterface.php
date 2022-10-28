<?php
 
namespace App\Interfaces;

interface UserInterface{
    // * This is an example only; 
    // * You can also follow the Interface Segragation of SOLID principles and Group them in a folder.
    public function login($request);
    public function logout();
    public function register($request);
    public function update($request);

}