<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Message;
use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaymentStoreRequest;

class HomeController extends Controller
{
    public function index () {
        $cars = Car::latest()->get();
        return view('frontend.homepage', compact('cars'));
    }

    public function detail (Car $car) {
        return view('frontend.detail', compact('car'));
    }
}
