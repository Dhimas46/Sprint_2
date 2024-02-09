<?php
namespace App\Contracts;

interface LocationRepositoryContract
{
    public function getProvinces();
    public function getProvincesById($id);
    public function getCities($provinceId);
    public function getCitiesById($id);
}
