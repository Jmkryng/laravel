<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// * Repositories
use App\Repositories\Test\TestRepository;

// * Interfaces
use App\Interfaces\TestInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TestInterface::class, TestRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
