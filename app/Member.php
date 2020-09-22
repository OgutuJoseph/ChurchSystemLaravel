<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $table = 'members'; 

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'member_id'; 

    protected $fillable = array('email','password', 'surname','other_names','phone','dob','group_id');

    public function Loadmembers()
    {
        return(DB::table('members') 
            ->join('church_groups','members.group_id', '=', 'church_groups.group_id')  
            ->select('church_groups.*','members.*')
            ->get());
    }

    public function church_groups()
    {
        return $this->hasMany('App\ChurchGroup');
    }
}
