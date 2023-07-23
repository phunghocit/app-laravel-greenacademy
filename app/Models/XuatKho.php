<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XuatKho extends Model
{
    use HasFactory;
    protected $table = 'xuatkho';

	protected $fillable = ['xk_ma','xk_ngaylap','xk_lydo','xk_diachi','xk_tongtien','ct_id','nv_id'];
    // public function chitietxuatkho()
    // {
    //     return $this->hasOne(ChiTietXuatKho::class, 'ctxk_id');
    // }
    // public function congtrinh(){
    //     return $this->belongsTo(CongTrinh::class, 'ct_id');
    // }
}
