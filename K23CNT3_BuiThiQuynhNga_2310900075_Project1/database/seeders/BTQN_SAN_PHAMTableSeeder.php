<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BTQN_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('BTQN_SAN_PHAM')->insert([
            'btqnMaSanPham'   =>"QN001",
            'btqnTenSanPham'  =>"Cây tài lộc",
            'btqnHinhAnh'     =>"images/san-pham/VP001.jpg",
            'btqnSoLuong'     => 100,
            'btqnDonGia'      => 699000,
            'btqnMaLoai'      =>1,
            'btqnTrangThai'   =>0,
        ]);
        DB::table('BTQN_SAN_PHAM')->insert([
            'btqnMaSanPham'   =>"QN002",
            'btqnTenSanPham'  =>"Cây tiền tài",
            'btqnHinhAnh'     =>"images/san-pham/VP002.jpg",
            'btqnSoLuong'     => 200,
            'btqnDonGia'      => 550000,
            'btqnMaLoai'      =>1,
            'btqnTrangThai'   =>0,
        ]);
        DB::table('BTQN_SAN_PHAM')->insert([
            'btqnMaSanPham'   =>"QN003",
            'btqnTenSanPham'  =>"Cây phú quý",
            'btqnHinhAnh'     =>"images/san-pham/VP003.jpg",
            'btqnSoLuong'     => 150,
            'btqnDonGia'      => 250000,
            'btqnMaLoai'      =>1,
            'btqnTrangThai'   =>0,
        ]);
        DB::table('BTQN_SAN_PHAM')->insert([
            'btqnMaSanPham'   =>"QN004",
            'btqnTenSanPham'  =>"Cây vạn phúc",
            'btqnHinhAnh'     =>"images/san-pham/VP004.jpg",
            'btqnSoLuong'     => 300,
            'btqnDonGia'      => 799000,
            'btqnMaLoai'      =>1,
            'btqnTrangThai'   =>0,
        ]);
        DB::table('BTQN_SAN_PHAM')->insert([
            'btqnMaSanPham'   =>"BL001",
            'btqnTenSanPham'  =>"Cây mộc lan",
            'btqnHinhAnh'     =>"images/san-pham/PT001.jpg",
            'btqnSoLuong'     => 150,
            'btqnDonGia'      => 590000,
            'btqnMaLoai'      =>3,
            'btqnTrangThai'   =>0,
        ]);
        DB::table('BTQN_SAN_PHAM')->insert([
            'btqnMaSanPham'   =>"BL002",
            'btqnTenSanPham'  =>"Cây kim tiền",
            'btqnHinhAnh'     =>"images/san-pham/PT002.jpg",
            'btqnSoLuong'     => 100,
            'btqnDonGia'      => 150000,
            'btqnMaLoai'      =>3,
            'btqnTrangThai'   =>0,
        ]);
        DB::table('BTQN_SAN_PHAM')->insert([
            'btqnMaSanPham'   =>"BL003",
            'btqnTenSanPham'  =>"Cây lộc phát",
            'btqnHinhAnh'     =>"images/san-pham/PT003.jpg",
            'btqnSoLuong'     => 200,
            'btqnDonGia'      => 299000,
            'btqnMaLoai'      =>3,
            'btqnTrangThai'   =>0,
        ]);
        DB::table('BTQN_SAN_PHAM')->insert([
            'btqnMaSanPham'   =>"BL004",
            'btqnTenSanPham'  =>"Cây hoa nhài",
            'btqnHinhAnh'     =>"images/san-pham/PT004.jpg",
            'btqnSoLuong'     => 300,
            'btqnDonGia'      => 199000,
            'btqnMaLoai'      =>3,
            'btqnTrangThai'   =>0,
        ]);
        
    }
}
