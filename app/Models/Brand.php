<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
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
}
