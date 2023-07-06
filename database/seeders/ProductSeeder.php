<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
         [
            'name'=> 'LG mobile',
            'price' => '200',
            'description' => "A smart phone with 4gb ram.",
            'category'=>"mobile",
            'gallery'=>"https://birchtree.me/content/images/size/w2000/2021/06/007-copy.jpg",
        
         ],
         [
            'name'=> 'oppo mobile',
            'price' => '300',
            'description' => "A smart phone with 4gb ram.",
            'category'=>"mobile",
            'gallery'=>"https://img.freepik.com/free-photo/phone-screen-with-abstract-marble-aesthetic_53876-145553.jpg?w=1060&t=st=1688480865~exp=1688481465~hmac=6a1fae5d7e240ec1a93a10d891b7e1bae605aa539566331817cad097ae07e17f",
        
         ],
         [
            'name'=> 'samsung mobile',
            'price' => '400',
            'description' => "A smart phone with 4gb ram.",
            'category'=>"mobile",
            'gallery'=>"https://img.freepik.com/premium-psd/smartphone-realistic-isolated-screen-mockup_196418-357.jpg?w=1060",
        
         ],
         [
            'name'=> 'asus mobile',
            'price' => '800',
            'description' => "A smart phone with 4gb ram.",
            'category'=>"mobile",
            'gallery'=>"https://img.freepik.com/free-psd/smartphone-mockup_1310-550.jpg?t=st=1688480905~exp=1688481505~hmac=e6dcbf6c6637d7ae86628b8e85641dc1fcb1f680e7cc73bb406d85cd340afbb9",
        
         ]
        ]);
    }
}
