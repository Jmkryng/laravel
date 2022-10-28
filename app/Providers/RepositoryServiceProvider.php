<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// * Repositories
use App\Repositories\Test\TestRepository,
    App\Repositories\User\UserRepository;

// * Interfaces
use App\Interfaces\TestInterface,
    App\Interfaces\UserInterface;

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
        $this->app->bind(UserInterface::class, UserRepository::class);
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
