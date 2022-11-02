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

    public function generateRandombrand() {
        $brand =[
       'TOYOTA',
       'HONDA',
       'BENZ',
       'BMW',
       'AUDI',
       'TESLA',
       'LEXUS',
       'FORD',
       'MAZDA',
       'INFINTI',
       'SUBARU',
       'NISSAN',
       'MITSUBISHI',
       'BENTLEY',
       'BUGATTI',
       'CADILLAC',
       'CHEVROLET',
       'LEUXGEN',
       'FERRARI',
       'PORSCHE'];
        return $brand[rand(0, count($brand)-1)];
    } 

    public function generateRandomnationality(){
     $nationality = [
     '日本',
     '德國',
     '美國',
     '英國',
     '台灣',
     '法國',
     '義大利'];
     return $nationality[rand(0, count($nationality)-1)];
    }

    public function generateRandomtimes(){
        $time = $this-> generateRandomString(rand(1900,2010));
         return $time[rand(0, count($time)-1)];
    }
    public function generateRandomplaces(){
        $places = [
        '愛知縣',
        '東京都',
        '巴登-符騰堡',
        '巴伐利亞',
        '加州',
        '密西根州',
        '廣島',
        '神奈川縣',
        '東京都',
        '英國克魯',
        '阿爾薩斯',
        '台北新店區',
        '摩德納',
        '斯圖加特',
        ];
        return $places[rand(0, count($places)-1)];
    }

    public function generateRandomceo(){
        $ceo = ['豐田佐吉',
        '本田宗一郎',
        '卡爾-賓士',
        '卡爾-拉普',
        '奧古斯特-霍希',
        '馬丁艾伯哈德',
        '豐田英二',
        '亨利福特',
        '松田重次郎',
        '比爾布魯斯',
        '北謙治',
        '曾次郎橋本',
        '松永和夫',
        '沃爾特-賓利',
        '埃拖里-布卡迪',
        '威廉墨菲',
        '路易斯-雪弗蘭',
        '嚴凱泰',
        '恩佐-法拉利',
        '斐迪南-保時捷',
        ];
        return $ceo[rand(0, count($ceo)-1)];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<25; $i++)
        {
            $brand = $this->generateRandombrand();
            $nationality = $this->generateRandomnationality();
            $places = $this->generateRandomplaces();
            $ceo = $ceo . "創辦人";
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            DB::table('brands')->insert([
                'id'=>1,
                'brand'=>$brand,
                'nationality'=>$nationality,
                'time'=> randyear(1900, 2022) . "-" . randmonth(1, 12) . "-" . randdate(1, 28),
                'places'=>$places,
                'ceo'=>$ceo,
            ]);
        }
    }

}