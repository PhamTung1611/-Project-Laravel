<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NsxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nsx')->insert([
            'TenNSX'=>'Apple',
            'GioiThieu'=>'Apple Inc. là một Tập đoàn công nghệ đa quốc gia của Mỹ...'
        ]);
        DB::table('nsx')->insert([
            'TenNSX'=>'SamSung',
            'GioiThieu'=>'SamSung Inc. là một Tập đoàn công nghệ đa quốc gia của Mỹ...'
        ]);
        DB::table('nsx')->insert([
            'TenNSX'=>'Oppo',
            'GioiThieu'=>'Oppo Inc. là một Tập đoàn công nghệ đa quốc gia của Mỹ...'
        ]);
        DB::table('nsx')->insert([
            'TenNSX'=>'Xiaomi',
            'GioiThieu'=>'Xiaomi Inc. là một Tập đoàn công nghệ đa quốc gia của Mỹ...'
        ]);
        DB::table('nsx')->insert([
            'TenNSX'=>'LG',
            'GioiThieu'=>'LG Inc. là một Tập đoàn công nghệ đa quốc gia của Mỹ...'
        ]);
    }
}
