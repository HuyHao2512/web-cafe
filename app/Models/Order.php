<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='don_dat_hang';
    protected $primaryKey = 'DDH_MA';
    public $timestamps = false;
    protected $fillable = ['ID_KHACH_HANG','DCGH_MA','NV_MA','DDH_PHIGIAOHANG','DDH_NGAYDAT','DDH_TONGTIEN'];
    
}
