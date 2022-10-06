<?php 

namespace App\Services\Test;

use Traits, Exception;

use App\Models\Test\Test;

class DeleteTest extends Traits
{
    public function delete($id){
        try {

            Test::onlyTrashed()->findOrFail($id)->forceDelete();

            return $this->success("Test Successfully Deleted");

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}