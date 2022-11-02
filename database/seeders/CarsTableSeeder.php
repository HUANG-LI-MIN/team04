<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
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
       $horsepower = $this-> generateRandomString(rand(100,1000));
       return $horsepower;
      }

      public function generateRandomcc(){
        $cc = rand(1300,3000);
        return $cc;
       }

       public function generateRandommoney(){
        $money = rand(50,10000);
        return $money;
       }

       public function generateRandomvariable_s(){
        $position = ['ABC', 'DDD', 'EFF'];
        return $position[rand(0, count($position)-1)];
       }

       public function generateRandomseats(){
        $seats = [2, 3, 4, 5, 6, 7, 8, 9];
         return $seats[rand(0, count($seats)-1)];
       }
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i<500; $i++)
      {
          $types = $this->generateRandomtypes();
          $horespower = 10;
          $cc = $this->generateRandomcc();
          $money = $this ->generateRandommoney();
          $position = $this ->generateRandomvariable_s(); 
          $seats = $this ->generateRandomseats();
          
          DB::table('cars')->insert([
            'id'=>rand(1,20),
            'type'=>$types,
            'bid'=>rand(1,20),
            'horsepower'=>$horespower,
            'cc'=>$cc,
            'money'=>$money,
            'variable_s'=>$position,
            'seats'=>$seats,
          ]);          
      }
      
   }
}
