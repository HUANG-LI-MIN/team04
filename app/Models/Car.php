<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'type',
        'bid',
        'horsepower',
        'cc',
        'money',
        'variable_s',
        'seats',
        'created_at',
        'updated_at',
    ];
    
    public function brand()
    {
        return $this->belongsTo('App\Models\brand', 'bid', 'id');
    }

    public function scopeSenior($query)
    {
        $query->where('money','>',5000)->orderBy('money');
    }
    public function scopeAlltype($query)
    {
        $query->select('type')->groupBy('type');
    }
    public function scopetype ($query, $type)
    {
        $query->where('type', '=', $type)
            ->orderBy('type');
    }
}

