<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table='gio_hang';
    protected $primaryKey = 'GH_MA';
    public $timestamps = false;
    protected $fillable = ['GH_NGAYCAPNHAT'];
}
