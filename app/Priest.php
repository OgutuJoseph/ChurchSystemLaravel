<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priest extends Model
{
    public $table = 'priests';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'priest_id';

    public function services()
    {
        return $this->hasMany('App\Service');
    }
}

 