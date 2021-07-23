<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\OrderContract;
use App\Repositories\OrderRepository;
class RepositoryServiceProvider extends ServiceProvider
{

 protected $repositories = [
    CategoryContract::class         =>          CategoryRepository::class,
    AttributeContract::class        =>          AttributeRepository::class,
    BrandContract::class            =>          BrandRepository::class,
    ProductContract::class          =>          ProductRepository::class,
    OrderContract::class            =>          OrderRepository::class,
];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
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
