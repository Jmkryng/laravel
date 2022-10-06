<?php 

namespace App\Services\Test;

use Traits, Exception;

use App\Models\Test\Test;

class ArchiveTest extends Traits
{
    public function archive($id){
        try {
        
            Test::findOrFail($id)->delete();

            return $this->success("Test Successfully Archived");

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}