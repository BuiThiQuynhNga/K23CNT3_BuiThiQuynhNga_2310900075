<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class BtqnVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
            // DB::table('btqnvattu')->insert(
            // [
            //     'btqnMaVTu'=>'DD01',
            //     'btqnTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            //     'btqnDvTinh'=>"Bộ",
            //     'btqnPhanTram'=>40,
            // ]
            // );
            // DB::table('btqnvattu')->insert(
            //     [
            //         'btqnMaVTu'=>'DD02',
            //         'btqnTenVTu'=>'Đầu DVD Hitachi 2 cửa',
            //         'btqnDvTinh'=>"Bộ",
            //         'btqnPhanTram'=>60,
            //     ]
            // );
        $faker = Faker::create();
        foreach (range(1,50) as $index){
            DB::table('btqnvattu')->insert([
                'btqnMaVTu'=>$faker->word(4),
                // 'MaNCC'=>$faker->word(15),
                'btqnTenVTu'=>$faker->sentence(5),  
                'btqnDvTinh'=>$faker->word(3),
                'btqnPhanTram'=>$faker->randomFloat('2',0,100)         
            ]);
        }
    }
}
