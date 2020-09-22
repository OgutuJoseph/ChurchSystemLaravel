<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class CMAMember extends Model
{
    public $table = 'cma_members'; 

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'cma_id'; 
 

    public function Loadcma_members()
    {
        return(DB::table('cma_members') 
            ->join('church_groups','cma_members.group_id', '=', 'church_groups.group_id')  
            ->select('church_groups.*','cma_members.*')
            ->get());
    }

    public function church_groups()
    {
        return $this->hasMany('App\ChurchGroup');
    }
}
