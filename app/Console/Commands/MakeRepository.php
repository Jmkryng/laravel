<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeRepository extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repo {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new repository class';

     /**
     *
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/Stubs/repository.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return  $rootNamespace . '\Repositories';
    }
}
