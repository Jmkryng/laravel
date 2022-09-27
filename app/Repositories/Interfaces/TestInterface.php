<?php
 
namespace App\Repositories\Interfaces;

interface TestInterface{
    public function index();
    public function create($request);
    public function show($id);
    public function update($request, $id);
    public function list();
    public function archive($id);
    public function restore($id);
    public function delete($id);
}