<?php 

namespace App\Services\Test;

use Traits, Exception;

use App\Models\Test\Test;

class ListTest extends Traits
{
    public function execute(){
        try {
            
            return $this->success("List of all archived test",  Test::onlyTrashed()->get());

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}