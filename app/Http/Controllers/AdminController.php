<?php

namespace App\Http\Controllers;

use App\Route;
use App\Town;
use App\TravelFirm;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod("POST")){
            if($request->record_type == "route"){
                $this->saveRoute($request);
            }
        }

        $cities = Town::orderBy("name","ASC")->get();
        $travelFirms = TravelFirm::all();

        return view("admin.index",compact("cities","travelFirms"));
    }

    public function saveRoute(Request $request){
        return Route::updateOrCreate(["id"=>$request->id],[
            "type"=>$request->type,
            "from"=>$request->from,
            "to"=>$request->to,
            "price"=>$request->price,
            "travel_firm_id"=>$request->firm
        ]);
    }
}
