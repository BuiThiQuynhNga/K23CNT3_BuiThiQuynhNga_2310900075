<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BtqnNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1,100) as $index){
            DB::table('btqnnhacc')->insert([
                'btqnMaNCC'=>$faker->uuid(),
                // 'MaNCC'=>$faker->word(15),
                'btqnTenNCC'=>$faker->sentence(5),  
                'btqnDiachi'=>$faker->address(),
                'btqnDienthoai'=>$faker->phoneNumber(10),
                'btqnemail'=>$faker->email(),
                'btqnstatus'=>$faker->boolean()         
            ]);
        }
        
    }
}
