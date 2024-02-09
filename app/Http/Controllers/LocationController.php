<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LocationService;

class LocationController extends Controller
{
    protected $locationService;

    public function __construct(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }

    public function getProvinces(Request $request)
    {
        if ($request->has('id')) {
            $id = $request->input('id');
            $provinces = $this->locationService->getProvincesById($id);
            return response()->json($provinces);
        } else {
            $provinces = $this->locationService->getProvinces();
            return response()->json($provinces);
        }
    }

    public function getCities(Request $request)
    {
        if($request->has('city_id')) {
            $id = $request->input('city_id');
            $cities = $this->locationService->getCitiesById($id);
            return response()->json($cities);
        } else {
            $provinceId = $request->input('province_id');
            $cities = $this->locationService->getCities($provinceId);
            return response()->json($cities);
        }



        // $provinceId = $request->input('province_id');
        // $cities = $this->locationService->getCities($provinceId);
        // return response()->json($cities);
    }

   
}
