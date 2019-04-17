<?php

namespace App\Http\Controllers\Api;

use App\Booking;
use App\Payment;
use App\Town;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function cities(Request $request){
        if ($request->isMethod("POST")){
            Town::updateOrCreate(["id"=>$request->id],[
                "name"=>$request->name
            ]);
        }

        $cities = Town::all();

    }


    public function booking(Request $request){

        $booking = Booking::create([
            "route_id"=>$request->route_id,
            "status"=>"paid",
            "paid"=>true,
            "details"=>json_encode($request->booking_details)
        ]);

        Payment::create([
            "booking_id"=>$booking->id,
            "amount"=>$request->amount,
            "details"=>json_encode($request->payment_details)
        ]);
    }
}
