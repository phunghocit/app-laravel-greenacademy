<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietNhapKho extends Model
{
    use HasFactory;
    protected $table = 'chitietnhapkho';

	protected $fillable = ['ctnk_soluong','ctnk_thanhtien','vt_id','nk_id'];

}
