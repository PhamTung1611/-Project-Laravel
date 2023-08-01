<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'Product_Name'=>'Iphone 11 Pro Max',
            'Product_Price'=>'10.000.000',
            'image'=>'',
            'Product_Desc'=>'Sản phẩm hoàn hảo',
            'Product_Quantity'=>11,
            'Product_Size'=>'6.7 inch',
            'Product_Pin'=>'3900 mAh',
        ]);
        DB::table('products')->insert([
            'Product_Name'=>'Iphone 12 Pro Max',
            'Product_Price'=>'13.000.000',
            'image'=>'',
            'Product_Desc'=>'Sản phẩm hoàn hảo',
            'Product_Quantity'=>11,
            'Product_Size'=>'6.7 inch',
            'Product_Pin'=>'3900 mAh',
        ]);
        DB::table('products')->insert([
            'Product_Name'=>'Iphone 13 Pro Max',
            'Product_Price'=>'16.000.000',
            'image'=>'',
            'Product_Desc'=>'Sản phẩm hoàn hảo',
            'Product_Quantity'=>11,
            'Product_Size'=>'6.7 inch',
            'Product_Pin'=>'3900 mAh',
        ]);
        DB::table('products')->insert([
            'Product_Name'=>'Iphone 14 Pro Max',
            'Product_Price'=>'19.000.000',
            'image'=>'',
            'Product_Desc'=>'Sản phẩm hoàn hảo',
            'Product_Quantity'=>11,
            'Product_Size'=>'6.7 inch',
            'Product_Pin'=>'3900 mAh',
        ]);
        DB::table('products')->insert([
            'Product_Name'=>'Iphone 15 Pro Max',
            'Product_Price'=>'30.000.000',
            'image'=>'',
            'Product_Desc'=>'Sản phẩm hoàn hảo',
            'Product_Quantity'=>11,
            'Product_Size'=>'6.7 inch',
            'Product_Pin'=>'3900 mAh',
        ]);
    }
}
