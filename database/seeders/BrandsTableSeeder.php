<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateRandomtypes() {
        $types = $this->generateRandomString(rand(2, 8));
        $types = strtolower($types);
        $types = ucfirst($types);
        return $types;
    } 

    public function generateRandomhorespower(){
     $housepower = $this-> generateRandomString(rand(1,3));
     return $housepower;
    }

    public function generateRandomcc(){
      $cc = $this-> generateRandomString(rand(4));
      return $cc;
     }

     public function generateRandommoney(){
      $money = $this-> generateRandomString(rand(2,4));
      return $money;
     }

     public function generateRandomvariable_s(){
     $position = ['0','5','6','7','8'];
      return $position[rand(0, count($position)-1)];
     }

     public function generateRandomseats(){
      $varpositioniable_s = ['2','4','5','6','7'];
       return $position[rand(0, count($position)-1)];
     }
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'id'=>1,
            'brand'=>'TOYOTA',
            'nationality'=>'JAPAN',
            'time'=> randyear(1900, 2022) . "-" . randmonth(1, 12) . "-" . randdate(1, 28),
            'places'=>'愛知縣',
            'ceo'=>'豐田佐吉',
          ]);
    }
}
