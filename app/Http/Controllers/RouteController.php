<?php

namespace App\Http\Controllers;

use App\Route;
use App\TravelFirm;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(Request $request)
    {
        $routes = Route::all();
        $firms = TravelFirm::all();
        return view("results",compact("routes","firms"));
    }
}
