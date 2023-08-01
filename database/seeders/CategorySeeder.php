<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorys')->insert([
            'Category_Name'=>'Iphone 11',
        ]);
        DB::table('categorys')->insert([
            'Category_Name'=>'Iphone 12',
        ]);
        DB::table('categorys')->insert([
            'Category_Name'=>'Iphone 13',
        ]);
        DB::table('categorys')->insert([
            'Category_Name'=>'Iphone 14',
        ]);
        DB::table('categorys')->insert([
            'Category_Name'=>'Iphone 15',
        ]);
    }
}
