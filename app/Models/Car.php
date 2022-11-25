<?php

namespace App\Models;
;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'brand',
        'nationality',
        'time',
        'places',
        'ceo',
        
    ];
    
    public function brand()
    {
        return $this->belongsTo('App\Models\brand', 'bid', 'id');
    }
}
