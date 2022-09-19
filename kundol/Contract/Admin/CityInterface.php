<?php

namespace App\Contract\Admin;

interface CityInterface
{
    public function all();

    public function show($city);

}
