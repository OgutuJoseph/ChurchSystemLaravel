<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    public $table = 'reservations'; 

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'reservation_id'; 

    public function Loadreservations()
    {
        return(DB::table('reservations') 
            ->join('services','reservations.service_id', '=', 'services.service_id') 
            ->join('members','reservations.member_id', '=', 'members.member_id') 
            ->select('services.*','members.*','reservations.*')
            ->get());
    }

    public function services()
    {
        return $this->belongsTo('App\Service');
    }


    public function members()
    {
        return $this->belongsTo('App\Member');
    }
}
