<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request){
        $package = Route::find($request->id);

        return view("booking",compact("package"));
    }
}
