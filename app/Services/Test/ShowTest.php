<?php 

namespace App\Services\Test;

use Traits, Exception;

use App\Models\Test\Test;

class ShowTest extends Traits
{
    public function show($id){
        try {
            
            $test = Test::findOrFail($id);

            return $this->success("Test Found", $test);

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}