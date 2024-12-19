<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BTQN_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $btqnMatKhau = md5("posaurieng@");
        DB::table('BTQN_QUAN_TRI')->insert([
            'btqnTaiKhoan'=>"ngaquynh158@gmail.com",
            'btqnMatKhau' =>$btqnMatKhau,
            'btqnTrangThai'=>0
        ]);
        DB::table('BTQN_QUAN_TRI')->insert([
            'btqnTaiKhoan'=>"mitsuyatakashi@gmail.com",
            'btqnMatKhau' =>$btqnMatKhau,
            'btqnTrangThai'=>0
        ]);
    }
}
