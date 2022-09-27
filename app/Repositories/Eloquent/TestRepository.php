<?php 

namespace App\Repositories\Eloquent;

use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\TestInterface;
use App\Models\Test\Test;
use Exception;

class TestRepository extends BaseRepository implements TestInterface
{
    // * Simple Test Case CRUD with Archive and Restore

	public function index(){        
        try {
            
            return $this->success("List of all test",  Test::all());

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
	}



    public function create($request){
        try {
            
            Test::create([
                "test" => $request->test
            ]);
    
            return $this->success("Test Successfully Created");

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }



    public function show($id){
        try {
            
            $test = Test::findOrFail($id);

            return $this->success("Test Found", $test);

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }



    public function update($request, $id){
        try {
            
            $test = Test::findOrFail($id);

            $test->update([
                "test" => $request->test
            ]);

            return $this->success("Test Successfully Updated");

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }



    public function list(){
        try {
            
            return $this->success("List of all archived test",  Test::onlyTrashed()->get());

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }



    public function archive($id){
        try {
        
            Test::findOrFail($id)->delete();

            return $this->success("Test Successfully Archived");

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }



    public function restore($id){
        try {
            
            Test::onlyTrashed()->findOrFail($id)->restore();

            return $this->success("Test Successfully Restored");

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }



    public function delete($id){
        try {

            Test::onlyTrashed()->findOrFail($id)->forceDelete();

            return $this->success("Test Successfully Deleted");

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}