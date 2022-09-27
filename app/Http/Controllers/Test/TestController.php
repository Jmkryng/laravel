<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;

// * Interface
use App\Repositories\Interfaces\TestInterface;

// * Request
use App\Http\Requests\Test\CreateTestRequest,
    App\Http\Requests\Test\UpdateTestRequest;

class TestController extends Controller
{
    private $repository;

    public function __construct(TestInterface $testRepository){
        $this->repository = $testRepository;
    }

    protected function index() {

        return $this->repository->index();
    }
    
    protected function create(CreateTestRequest $request) {
        return $this->repository->create($request);
    }
    
    protected function show($id) {
        return $this->repository->show($id);
    }
    
    protected function update(UpdateTestRequest $request, $id) {
        return $this->repository->update($request, $id);
    }
    
    protected function list(){
        return $this->repository->list();
    }
    
    protected function archive($id){
        return $this->repository->archive($id);
    }
    
    protected function restore($id){
        return $this->repository->restore($id);
    }

    protected function delete($id) {
        return $this->repository->delete($id);
    }
}