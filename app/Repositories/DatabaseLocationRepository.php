<?php

namespace App\Repositories;

use App\Contracts\LocationRepositoryContract;
use App\Services\DatabaseService;

class DatabaseLocationRepository implements LocationRepositoryContract
{
    protected $databaseService;

    public function __construct(DatabaseService $databaseService)
    {
        $this->databaseService = $databaseService;
    }
    public function getProvinces()
    {
        return $this->databaseService->getProvinces();
    }
    public function getProvincesById($id)
    {
        return $this->databaseService->getProvincesById($id);
    }
    
    public function getCities($provinceId)
    {
        return $this->databaseService->getCities($provinceId);
    }

    public function getCitiesById($id)
    {
        return $this->databaseService->getCitiesById($id);
    }

    
}