<?php 

namespace App\Services\Test;

use Traits,
    Exception;

use App\Models\Test\Test;

class RestoreTest extends Traits
{
    public function restore($id){
        try {
            
            Test::onlyTrashed()->findOrFail($id)->restore();

            return $this->success("Test Successfully Restored");

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}