<?php

namespace App\Http\Controllers\API\Admin;

use App\Contract\Admin\CityInterface;
use App\Http\Controllers\Controller as Controller;
use App\Models\Admin\City;
use App\Repository\Admin\CityRepository;

class CityController extends Controller
{

    private $CityRepository;

    public function __construct(CityInterface $CityRepository)
    {
        $this->CityRepository = $CityRepository;
    }

    public function index()
    {
        return $this->CityRepository->all();
    }

    public function show(City $city)
    {
        return $this->CityRepository->show($city);
    }
}
