<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\LocationRepositoryContract;
use App\Services\LocationRepositoryFactory;
use App\Repositories\RajaOngkirLocationRepository;
use App\Repositories\DatabaseLocationRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(LocationRepositoryContract::class, function () {
            return LocationRepositoryFactory::make();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // if(config('services.location_repository') == 'rajaongkir') {
        //     $this->app->bind(LocationRepositoryContract::class, RajaOngkirLocationRepository::class);
        // } else if(config('services.location_repository') == 'database') {
        //     $this->app->bind(LocationRepositoryContract::class, DatabaseLocationRepository::class);
        // }
    }
}
