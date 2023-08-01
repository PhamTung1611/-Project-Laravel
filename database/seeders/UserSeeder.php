<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            // cú pháp: 'tên trường'=>'giá trị',
            'name' => 'John',
            'email' => 'phamtung@gmail.com',
            'password' => Hash::make('123321'),
            'role_id' => 1
        ]);
    }
}
