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
            'btqnMaLoai'    => "L001",
            'btqnTenLoai'   =>"Cây cảnh văn phòng",
            'btqnTrangThai' =>0
        ]);
        DB::table('BTQN_LOAI_SAN_PHAM')->insert([
            'btqnMaLoai'    => "L002",
            'btqnTenLoai'   =>"Cây để bàn",
            'btqnTrangThai' =>0
        ]);
        DB::table('BTQN_LOAI_SAN_PHAM')->insert([
            'btqnMaLoai'    => "L003",
            'btqnTenLoai'   =>"Cây phong thủy",
            'btqnTrangThai' =>0
        ]);
        DB::table('BTQN_LOAI_SAN_PHAM')->insert([
            'btqnMaLoai'    => "L004",
            'btqnTenLoai'   =>"Cây thủy canh",
            'btqnTrangThai' =>0
        ]);
    }
}
