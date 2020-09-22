<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChurchGroup extends Model
{
    public $table = 'church_groups'; 

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'group_id';

    public function members()
    {
        return $this->belongsTo('App\Member');
    }
}
