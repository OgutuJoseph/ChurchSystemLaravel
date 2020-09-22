<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public $table = 'guests'; 

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'guest_id';
}
