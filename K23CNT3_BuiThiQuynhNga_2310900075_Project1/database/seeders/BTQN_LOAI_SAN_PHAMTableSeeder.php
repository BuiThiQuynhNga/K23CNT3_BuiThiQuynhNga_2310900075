<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BTQN_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('BTQN_LOAI_SAN_PHAM')->insert([
            'btqnMaLoai'    => "BT01",
            'btqnTenLoai'   =>"Hoa thiên lí",
            'btqnTrangThai' =>0
        ]);
        DB::table('BTQN_LOAI_SAN_PHAM')->insert([
            'btqnMaLoai'    => "BT02",
            'btqnTenLoai'   =>"Hoa phù dung",
            'btqnTrangThai' =>0
        ]);
        DB::table('BTQN_LOAI_SAN_PHAM')->insert([
            'btqnMaLoai'    => "BT03",
            'btqnTenLoai'   =>"Hoa thủy tiên",
            'btqnTrangThai' =>0
        ]);
        DB::table('BTQN_LOAI_SAN_PHAM')->insert([
            'btqnMaLoai'    => "BT04",
            'btqnTenLoai'   =>"Hoa kim tiền",
            'btqnTrangThai' =>0
        ]);
    }
}
