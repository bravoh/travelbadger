<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $guarded = [];

    public function from_town(){
        return $this->belongsTo(Town::class,"from");
    }

    public function to_town(){
        return $this->belongsTo(Town::class,"to");
    }

    public function travel_firm(){
        return $this->belongsTo(TravelFirm::class);
    }
}
