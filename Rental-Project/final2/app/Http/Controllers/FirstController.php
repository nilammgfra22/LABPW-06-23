<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Driver;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();
        $drivers = Driver::latest()->get();

        return view('welcome', compact('cars', 'drivers'));
    }
}
