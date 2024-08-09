<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='khach_hang';
    protected $primaryKey = 'ID_KHACH_HANG';
    public $timestamps = false;
    protected $fillable = ['GH_MA', 'KH_HOTEN','KH_SDT','KH_GIOITINH','KH_EMAIL','KH_NGAYSINH','KH_TAIKHOAN','KH_MATKHAU'];
}
