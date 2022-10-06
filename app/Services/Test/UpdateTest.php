<?php 

namespace App\Services\Test;

use Traits, Exception;

use App\Models\Test\Test;

class UpdateTest extends Traits
{
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
}