<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;

// * Interface
use App\Interfaces\TestInterface;

// * Request
use App\Http\Requests\Test\CreateTestRequest,
    App\Http\Requests\Test\UpdateTestRequest;

class TestController extends Controller
{
    private $interface;

    public function __construct(TestInterface $testInterface){
        $this->interface = $testInterface;
    }

    protected function index() {

        return $this->interface->index();
    }
    
    protected function create(CreateTestRequest $request) {
        return $this->interface->create($request);
    }
    
    protected function show($id) {
        return $this->interface->show($id);
    }
    
    protected function update(UpdateTestRequest $request, $id) {
        return $this->interface->update($request, $id);
    }
    
    protected function list(){
        return $this->interface->list();
    }
    
    protected function archive($id){
        return $this->interface->archive($id);
    }
    
    protected function restore($id){
        return $this->interface->restore($id);
    }

    protected function delete($id) {
        return $this->interface->delete($id);
    }
}