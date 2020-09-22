<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    public $table = 'services'; 

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at'; 

    protected $primaryKey = 'service_id'; 
    protected $dates = ['date'];


    public function Loadservices()
    {
        return(DB::table('services') 
            ->join('priests','services.priest_id', '=', 'priests.priest_id')  
            ->select('priests.*','services.*')
            ->get());
    }

    public function priests()
    {
        return $this->belongsTo('App\Priest');
    }

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }

    public function guestreservations()
    {
        return $this->hasMany('App\GuestReservation');
    }
}

