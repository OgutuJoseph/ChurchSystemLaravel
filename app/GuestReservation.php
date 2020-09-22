<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class GuestReservation extends Model
{
    public $table = 'guest_reservations'; 

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'reserve_id'; 

    public function Loadguestreservations()
    {
        return(DB::table('guest_reservations') 
            ->join('services','guest_reservations.service_id', '=', 'services.service_id')  
            ->join('guests','guest_reservations.guest_id', '=', 'guests.guest_id')  
            ->select('services.*','guests.*','guest_reservations.*')
            ->get());
    }


    public function services()
    {
        return $this->belongsTo('App\Service');
    }


    public function guests()
    {
        return $this->belongsTo('App\Guest');
    }
}
