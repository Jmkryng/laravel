<?php 

namespace App\Services\Test;

use Traits, Exception;

use App\Models\Test\Test;

class CreateTest extends Traits
{
    public function execute($request){
        try {
            
            Test::create([
                "test" => $request->test
            ]);
    
            return $this->success("Test Successfully Created");

        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}