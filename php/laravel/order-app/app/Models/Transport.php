<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = [
        'name',
        'owner',
        'id'
    ];
    protected $hidden=['created_at','updated_at'];

    protected $table="transport";

    function order(){
        return $this->hasMany(Order::class);
    }

}
