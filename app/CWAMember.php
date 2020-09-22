<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class CWAMember extends Model
{
    public $table = 'cwa_members'; 

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'cwa_id'; 
 

    public function Loadcwa_members()
    {
        return(DB::table('cwa_members') 
            ->join('church_groups','cwa_members.group_id', '=', 'church_groups.group_id')  
            ->select('church_groups.*','cwa_members.*')
            ->get());
    }

    public function church_groups()
    {
        return $this->hasMany('App\ChurchGroup');
    }
}
