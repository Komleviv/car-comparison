<?php

namespace App\Http\Controllers;

use App\Http\Services\Car\CarServices;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(CarServices $carService)
    {
        $carService->getCarMarkModel();
    }
}
