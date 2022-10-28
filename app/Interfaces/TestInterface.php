<?php
 
namespace App\Interfaces;

interface TestInterface{
    // * This is an example only; 
    // * You can also follow the Interface Segragation of SOLID principles and Group them in a folder.
    public function index();
    public function create($request);
    public function show($id);
    public function update($request, $id);
    public function list();
    public function archive($id);
    public function restore($id);
    public function delete($id);
}