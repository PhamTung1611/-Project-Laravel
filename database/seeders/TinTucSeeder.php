<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TinTucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tintuc')->insert([
            'TieuDe' => 'Tiêu Đề 1',
            'TomTat' => 'Tóm tắt 1',
            'NoiDung' => 'Nội Dung 1',
            'NgayDangTin' => '2003/11/16',
            'HinhAnh' => 'none',
        ]);
        DB::table('tintuc')->insert([
            'TieuDe' => 'Tiêu Đề 2',
            'TomTat' => 'Tóm tắt 2',
            'NoiDung' => 'Nội Dung 2',
            'NgayDangTin' => '2003/11/16',
            'HinhAnh' => 'none',
        ]);
        DB::table('tintuc')->insert([
            'TieuDe' => 'Tiêu Đề 3',
            'TomTat' => 'Tóm tắt 3',
            'NoiDung' => 'Nội Dung 4',
            'NgayDangTin' => '2003/11/16',
            'HinhAnh' => 'none',
        ]);
        DB::table('tintuc')->insert([
            'TieuDe' => 'Tiêu Đề 4',
            'TomTat' => 'Tóm tắt 4',
            'NoiDung' => 'Nội Dung 3',
            'NgayDangTin' => '2003/11/16',
            'HinhAnh' => 'none',
        ]);
        DB::table('tintuc')->insert([
            'TieuDe' => 'Tiêu Đề 5',
            'TomTat' => 'Tóm tắt 5',
            'NoiDung' => 'Nội Dung 5',
            'NgayDangTin' => '2003/11/16',
            'HinhAnh' => 'none',
        ]);
    }
}
