<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='san_pham';
    protected $primaryKey = 'SP_MA';
    public $timestamps = false;
    protected $fillable = ['L_MA', 'SP_TENSANPHAM','SP_HINHANH','SP_GIA','SP_MOTA'];
}
