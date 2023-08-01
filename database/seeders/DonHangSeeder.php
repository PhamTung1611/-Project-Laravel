<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('donhang')->insert([
            'TenDangNhap'=>'Phamtung',
            'NgayLap'=>'2003/11/16',
            'DiaChiGiao'=>'Bắc Ninh',
            'TongTien'=>'10000000',
            'TrangThai'=>0,
            'HinhThuc'=>'Chuyển Khoản'
        ]);
        DB::table('donhang')->insert([
            'TenDangNhap'=>'NgocAnh',
            'NgayLap'=>'2003/11/16',
            'DiaChiGiao'=>'Bắc Ninh',
            'TongTien'=>'10000000',
            'TrangThai'=>0,
            'HinhThuc'=>'Chuyển Khoản'
        ]);
        DB::table('donhang')->insert([
            'TenDangNhap'=>'TienNgia',
            'NgayLap'=>'2003/11/16',
            'DiaChiGiao'=>'Bắc Ninh',
            'TongTien'=>'10000000',
            'TrangThai'=>0,
            'HinhThuc'=>'Chuyển Khoản'
        ]);
        DB::table('donhang')->insert([
            'TenDangNhap'=>'QuangHieu',
            'NgayLap'=>'2003/11/16',
            'DiaChiGiao'=>'Bắc Ninh',
            'TongTien'=>'10000000',
            'TrangThai'=>0,
            'HinhThuc'=>'Chuyển Khoản'
        ]);
        DB::table('donhang')->insert([
            'TenDangNhap'=>'NgocAnh',
            'NgayLap'=>'2003/11/16',
            'DiaChiGiao'=>'Bắc Ninh',
            'TongTien'=>'10000000',
            'TrangThai'=>0,
            'HinhThuc'=>'Chuyển Khoản'
        ]);

    }
}
