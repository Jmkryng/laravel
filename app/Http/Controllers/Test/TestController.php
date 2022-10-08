<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;

// * Services
use App\Services\Test\ArchiveTest,
    App\Services\Test\CreateTest,
    App\Services\Test\DeleteTest,
    App\Services\Test\IndexTest,
    App\Services\Test\ListTest,
    App\Services\Test\RestoreTest,
    App\Services\Test\ShowTest,
    App\Services\Test\UpdateTest;

// * Request
use App\Http\Requests\Test\CreateTestRequest,
    App\Http\Requests\Test\UpdateTestRequest;

class TestController extends Controller
{
    private $archive, $create, $delete, $index, $list, $restore, $show, $update;

    public function __construct(
        ArchiveTest $archiveTest,
        CreateTest  $createTest,
        DeleteTest  $deleteTest,
        IndexTest   $indexTest,
        ListTest    $listTest,
        RestoreTest $restoreTest,
        ShowTest    $showTest,
        UpdateTest  $updateTest
    ){
        $this->archive = $archiveTest;
        $this->create  = $createTest;
        $this->delete  = $deleteTest;
        $this->index   = $indexTest;
        $this->list    = $listTest;
        $this->restore = $restoreTest;
        $this->show    = $showTest;
        $this->update  = $updateTest;
    }

    protected function index() {
        return $this->index->execute();
    }
    
    protected function create(CreateTestRequest $request) {
        return $this->create->execute($request);
    }
    
    protected function show($id) {
        return $this->show->execute($id);
    }
    
    protected function update(UpdateTestRequest $request, $id) {
        return $this->update->execute($request, $id);
    }
    
    protected function list(){
        return $this->list->execute();
    }
    
    protected function archive($id){
        return $this->archive->execute($id);
    }
    
    protected function restore($id){
        return $this->restore->execute($id);
    }

    protected function delete($id) {
        return $this->delete->execute($id);
    }
}