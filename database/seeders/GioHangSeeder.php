<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GioHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('giohang')->insert([
            'SLMua'=>'1',
            'Gia'=>'10000000',
            'HinhThuc'=>'Chuyển khoản'
        ]);
        DB::table('giohang')->insert([
            'SLMua'=>'2',
            'Gia'=>'20000000',
            'HinhThuc'=>'Chuyển khoản'
        ]);
        DB::table('giohang')->insert([
            'SLMua'=>'3',
            'Gia'=>'10000000',
            'HinhThuc'=>'Chuyển khoản'
        ]);
        DB::table('giohang')->insert([
            'SLMua'=>'4',
            'Gia'=>'40000000',
            'HinhThuc'=>'Chuyển khoản'
        ]);
        DB::table('giohang')->insert([
            'SLMua'=>'5',
            'Gia'=>'50000000',
            'HinhThuc'=>'Chuyển khoản'
        ]);
    }
}
