<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VatTuKho extends Model
{
    use HasFactory;
    protected $table = 'vattukho';

	protected $fillable = ['vt_id','sl_nhap','sl_xuat','sl_ton','kho_id'];

    public function vattu()
    {
        return $this->hasMany(VatTu::class, 'vt_id');
    }
    public function kho(){
        return $this->belongsTo(kho::class, 'kho_id');
    }
}
