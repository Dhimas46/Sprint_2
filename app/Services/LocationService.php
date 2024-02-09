<?php

namespace App\Services;

use App\Contracts\LocationRepositoryContract;

class LocationService
{
    protected $locationRepository;

    public function __construct(LocationRepositoryContract $locationRepository)
    {
        $this->locationRepository = $locationRepository;
    }

    public function getProvinces()
    {
        return $this->locationRepository->getProvinces();
    }

    public function getProvincesById($id)
    {
        return $this->locationRepository->getProvincesById($id);
    }

    public function getCities($provinceId)
    {
        return $this->locationRepository->getCities($provinceId);
    }

    public function getCitiesbyId($id)
    {
        return $this->locationRepository->getCitiesById($id);
    }
}
