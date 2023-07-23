<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhapKho extends Model
{
    use HasFactory;
    protected $table = 'nhapkho';

	protected $fillable = ['nk_ma','nk_ngaylap','nk_lydo','nk_tongtien','npp_id','nv_id'];

}
