<?php 

namespace App\Services\Test;

use Traits, Exception;

use App\Models\Test\Test;

class IndexTest extends Traits
{
    public function execute(){        
        try {
            
            return $this->success("List of all test",  Test::all());

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
	}
}