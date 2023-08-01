<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
           
            'tendangnhap'=> 'Pham huy tung',
            'matkhau'=>'1234567',
            'name'=>'Phạm Huy Tùng',
            'image'=>'',
            'sdt'=>'0342757452',
            'email'=>'tungphph27346@fpt.edu.vn',
            'address'=>'Bắc Ninh',
            'role' => '1'
        ]);
        DB::table('accounts')->insert([
           
            'tendangnhap'=> 'vu quang hieu',
            'matkhau'=>'12345672',
            'name'=>'vu quang hieu',
            'image'=>'',
            'sdt'=>'0342757989',
            'email'=>'tungphph27@fpt.edu.vn',
            'address'=>'Nam dinh',
            'role' => '1'
        ]);
        DB::table('accounts')->insert([
           
            'tendangnhap'=> ' huy tung',
            'matkhau'=>'123234567',
            'name'=>' Huy Tùng',
            'image'=>'',
            'sdt'=>'0342737452',
            'email'=>'tungphp7346@fpt.edu.vn',
            'address'=>'Bắc Nam',
            'role' => '0'
        ]);
        DB::table('accounts')->insert([
           
            'tendangnhap'=> 'Pham tung',
            'matkhau'=>'1234567',
            'name'=>'Phạm Tùng',
            'image'=>'',
            'sdt'=>'0342757552',
            'email'=>'tungphph246@fpt.edu.vn',
            'address'=>'Bắc Giang',
            'role' => '0'
        ]);
        DB::table('accounts')->insert([
           
            'tendangnhap'=> 'tung mixi',
            'matkhau'=>'12343567',
            'name'=>'Tùng MiXi',
            'image'=>'',
            'sdt'=>'0342457452',
            'email'=>'tungphph346@fpt.edu.vn',
            'address'=>'Bắc Linnnn',
            'role' => '0'
        ]);
    }
}
