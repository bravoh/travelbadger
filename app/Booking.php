<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = [];

    public function route(){
        return $this->belongsTo(Route::class,"route_id");
    }
}
