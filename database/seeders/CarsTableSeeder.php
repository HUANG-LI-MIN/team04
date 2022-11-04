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
       $horsepower = rand(100,1000);
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
        $position = ['七速手自排', '無段變速', '六速手自排','九速手自排','八速手自排','鋰離子電池','六速自排','八速自排','六速手排','無段自動','五速自排',];
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
          $horespower = $this->generateRandomhorespower();
          $cc = $this->generateRandomcc();
          $money = $this ->generateRandommoney();
          $position = $this ->generateRandomvariable_s(); 
          $seats = $this ->generateRandomseats();
          
          DB::table('cars')->insert([
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
