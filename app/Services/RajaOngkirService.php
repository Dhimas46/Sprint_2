<?php

namespace App\Services;
use GuzzleHttp\Client;

class RajaOngkirService{
    
    public function getProvinces()
    {
        $client = new Client();
        $response = $client->get('https://api.rajaongkir.com/starter/province', [
            'headers' => [
                'key' => '0df6d5bf733214af6c6644eb8717c92c',
            ],
        ]);
        $provinces = json_decode($response->getBody(), true)['rajaongkir']['results'];
        $result = [
            'status' => 'success',
            'message' => 'Data provinsi berhasil diambil dari API RajaOngkir',
            'data' => $provinces,
        ];
        return $result;
    }

    public function getProvincesById($provinceId)
    {
        $client = new Client();
        $response = $client->get('https://api.rajaongkir.com/starter/province', [
            'headers' => [
                'key' => '0df6d5bf733214af6c6644eb8717c92c',
            ],
            'query' => [
                'id' => $provinceId,
            ],
        ]);
        $provinces = json_decode($response->getBody(), true)['rajaongkir']['results'];
        $result = [
            'status' => 'success',
            'message' => 'Data provinsi berhasil diambil dari API RajaOngkir',
            'data' => $provinces,
        ];
        return $result;
    }

    public function getCities($provinceId)
    {
        $client = new Client();
        $response = $client->get('https://api.rajaongkir.com/starter/province', [
            'headers' => [
                'key' => '0df6d5bf733214af6c6644eb8717c92c',
            ],
            'query' => [
                'id' => $provinceId,
            ],
        ]);
        $provinces = json_decode($response->getBody(), true)['rajaongkir']['results'];
    }

    public function getCitiesById($cityId)
    {
        $client = new Client();
        $response = $client->get('https://api.rajaongkir.com/starter/city', [
            'headers' => [
                'key' => '0df6d5bf733214af6c6644eb8717c92c',
            ],
            'query' => [
                'id' => $cityId,
            ],
        ]);
        $cities = json_decode($response->getBody(), true)['rajaongkir']['results'];
        $result = [
            'status' => 'success',
            'message' => 'Data kota berhasil diambil dari API RajaOngkir',
            'data' => $cities,
        ];
        return $result;
    }

}