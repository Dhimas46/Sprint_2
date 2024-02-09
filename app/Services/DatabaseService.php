<?php

namespace App\Services;
use App\Models\Province;
use App\Models\City;

class DatabaseService{

    public function getProvinces(){
        $data = Province::get();
      
            $result = [
                'success' => true,
                'message' => 'Data provinsi berhasil diambil dari database',
                'data' => $data
            ];
        
        return $result;
    }

    public function getProvincesById($id){
        $data = Province::where('province_id', $id)->firstOrFail();
      
            $result = [
                'success' => true,
                'message' => 'Data provinsi berhasil diambil dari database',
                'data' => $data
            ];
        
        return $result;
    }

    public function getCities($provinceId){
        $data = City::where('province_id', $provinceId)->get();
      
            $result = [
                'success' => true,
                'message' => 'Data kota berhasil diambil dari database',
                'data' => $data
            ];
        return $result;
    }

    public function getCitiesById($id){
        $data = City::where('city_id', $id)->firstOrFail();
      
            $result = [
                'success' => true,
                'message' => 'Data kota berhasil diambil dari database',
                'data' => $data
            ];
        
        return $result;
    }

}