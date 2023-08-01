<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'products';
    protected $fillable=[
        'Product_Name ',
        'Product_Price',
        'image',
        'Product_Desc',
        'Product_Quantity',
        'Product_Size',
        'Product_Pin',
    ];
}
