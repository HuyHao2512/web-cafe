<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table='nhan_vien';
    protected $primaryKey = 'NV_MA';
    public $timestamps = false;
    protected $fillable = ['NV_HOTEN','NV_SDT','NV_DIACHI','NV_GIOITINH','NV_EMAIL','NV_NGAYSINH','NV_TAIKHOAN','NV_MATKHAU'];
}
