<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kho extends Model
{
    use HasFactory;
    
	protected $table = 'kho';

	protected $fillable = ['kho_ma','kho_ten','kho_lienhe','kho_diachi','kho_sdt','kho_quanly','kho_ghichu'];
    // public function vattu()
    // {
    //     return $this->hasMany(VatTu::class, 'vt_id');
    // }
    // public function vattukho()
    // {
    //     return $this->hasMany(VatTuKho::class, 'vtk_id');
    // }
    // public function chitietchuyenkho(){
    //     return $this->belongsTo(ChiTietChuyenKho::class, 'ctck_id');
    // }
}
