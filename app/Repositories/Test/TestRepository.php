<?php 

namespace App\Repositories\Test;

use Traits, Exception;

// * Interfaces
use App\Interfaces\TestInterface;

// * Models
use App\Models\Test\Test;

class TestRepository extends Traits implements TestInterface
{
    // * Simple Test Case CRUD with Archive and Restore
    // * NOTE: This is a sample only: You can also follow the Single Responsibility of SOLID principles
    
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