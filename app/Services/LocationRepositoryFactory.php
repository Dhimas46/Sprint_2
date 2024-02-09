<?php


namespace App\Services;

use App\Contracts\LocationRepositoryContract;
use App\Repositories\RajaOngkirLocationRepository;
use App\Repositories\DatabaseLocationRepository;

class LocationRepositoryFactory
{
    public static function make(): LocationRepositoryContract
    {
        $repository = config('services.location_repository');
    
        if ($repository == 'database') {
            return app(DatabaseLocationRepository::class);
        } else {
            $message = "Berhasil ambil data dari API Raja Ongkir";
            return tap(app(RajaOngkirLocationRepository::class), function ($repository) use ($message) {
                $repository->setMessage($message);
            });
        }
    }
}