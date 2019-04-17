<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TravelFirm extends Model
{
    public function routes(){
        return $this->hasMany(Route::class,"travel_firm_id","id");
    }
}
