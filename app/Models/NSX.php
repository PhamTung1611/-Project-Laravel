<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NSX extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'nsx';
    protected $fillable = [
       'TenNSX',
       'GioiThieu'
    ];
}
