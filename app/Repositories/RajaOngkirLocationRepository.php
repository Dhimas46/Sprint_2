<?php


namespace App\Repositories;

use App\Contracts\LocationRepositoryContract;
use App\Services\RajaOngkirService;

class RajaOngkirLocationRepository implements LocationRepositoryContract
{
    protected $rajaOngkirService;
    protected $message;

    public function __construct(RajaOngkirService $rajaOngkirService)
    {
        $this->rajaOngkirService = $rajaOngkirService;
    }

    public function getProvinces()
    {
        return $this->rajaOngkirService->getProvinces();
    }
    public function getProvincesById($id)
    {
        return $this->rajaOngkirService->getProvincesById($id);
    }
    
    public function getCities($provinceId)
    {
        return $this->rajaOngkirService->getCities($provinceId);
    }

    public function getCitiesById($id)
    {
        return $this->rajaOngkirService->getCitiesById($id);
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
}