<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable=[
      
        'id',
        'brand',
        'nationality',
        'time',
        'places',
        'ceo',
    ];
   
    use HasFactory;
    public function cars()
    {
        return $this->hasMany('App\Models\Car', 'bid');
    }

    public function delete()
    {
        $this->cars()->delete();
        return parent::delete();
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\brand', 'bid', 'id');
    }
    public function scopeJapan($query)
    {
        $query->where('nationality','日本')->orderBy('nationality');
    }
    public function scopeUSA($query)
    {
        $query->where('nationality','美國')->orderBy('nationality');
    }
    public function scopeGermany($query)
    {
        $query->where('nationality','德國')->orderBy('nationality');
    }
    

}

