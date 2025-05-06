<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'used',
    ];

    protected $casts = [
        'used' => 'boolean',
    ];
    
    protected $table="order";

    function transport(){
        return $this->belongsTo(Transport::class);
    }
}
