<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietChuyenKho extends Model
{
    use HasFactory;
    protected $table = 'chitietchuyenkho';

	protected $fillable = ['ctck_soluong','ctck_thanhtien','vt_id','ck_id','khocu_id','khomoi_id'];


    // public function chuyenkho(){
    //     return $this->belongsTo(ChuyenKho::class, 'ck_id');
    // }
    // public function vattu()
    // {
    //     return $this->hasMany(VatTu::class, 'vt_id');
    // }
    // public function kho()
    // {
    //     return $this->hasMany(kho::class, 'kho_id');
    // }
}
