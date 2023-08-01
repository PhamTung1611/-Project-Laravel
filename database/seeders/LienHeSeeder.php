<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LienHeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lienhe')->insert([
            'HoVaTen' => 'Phạm Huy Tùng',
            'Email' => 'tung@gmail.com',
            'SDT' => '0342757452',
            'NoiDung' => 'Tôi muốn đặt hàng'
        ]);
        DB::table('lienhe')->insert([
            'HoVaTen' => 'Phạm Huy Tùng',
            'Email' => 'tung@gmail.com',
            'SDT' => '0342757452',
            'NoiDung' => 'Tôi muốn đặt hàng'
        ]);
        DB::table('lienhe')->insert([
            'HoVaTen' => 'Phạm Huy Tùng',
            'Email' => 'tung@gmail.com',
            'SDT' => '0342757452',
            'NoiDung' => 'Tôi muốn đặt hàng'
        ]);
        DB::table('lienhe')->insert([
            'HoVaTen' => 'Phạm Huy Tùng',
            'Email' => 'tung@gmail.com',
            'SDT' => '0342757452',
            'NoiDung' => 'Tôi muốn đặt hàng'
        ]);
        DB::table('lienhe')->insert([
            'HoVaTen' => 'Phạm Huy Tùng',
            'Email' => 'tung@gmail.com',
            'SDT' => '0342757452',
            'NoiDung' => 'Tôi muốn đặt hàng'
        ]);
    }
}
