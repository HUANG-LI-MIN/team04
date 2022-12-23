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
    public function scopeAllModel($query)
    {
        $query->select('model')->groupBy('model');
    }

    public function scopeModel($query, $pos)
    {
        $query->where('model', '=', $pos)
            ->orderBy('type');
    }
}
