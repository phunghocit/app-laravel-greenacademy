<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VatTu extends Model
{
    use HasFactory;
    protected $table = 'vattu';

	protected $fillable = ['vt_ma','vt_ten','dvt_id','nvt_id','cl_id','npp_id','nsx_id','vt_gia'];

    public function vattukho(){
        return $this->belongsTo(VatTuKho::class, 'vtk_id');
    }
    public function kho(){
        return $this->belongsTo(Kho::class, 'kho_id');
    }
    public function chatluong(){
        return $this->belongsTo(ChatLuong::class, 'cl_id');
    }
    public function nhomvattu(){
        return $this->belongsTo(NhomVatTu::class, 'nvt_id');
    }
    public function donvitinh(){
        return $this->belongsTo(DonViTinh::class, 'dvt_id');
    }
    public function chitietchuyenkho(){
        return $this->belongsTo(ChiTietChuyenKho::class, 'ctck_id');
    }
    public function chitietxuatkho(){
        return $this->belongsTo(ChiTietXuatKho::class, 'ctxk_id');
    }
}
