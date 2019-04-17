<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Route;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request){
        $package = Route::find($request->id);

        return view("booking",compact("package"));
    }

    public function ticket(Request $request){
        $booking = Booking::find($request->id);
        return view("ticket",compact("booking"));
    }
}
