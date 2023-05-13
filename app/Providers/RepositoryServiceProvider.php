<?php

namespace App\Providers;

use App\Http\Interfaces\API\ProductRepositoryInterface;
use App\Http\Interfaces\Website\HomeRepositoryInterface;
use App\Http\Repositories\API\ProductRepository;
use App\Http\Repositories\Website\HomeRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(HomeRepositoryInterface::class, HomeRepository::class);
    }
}
