<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietXuatKho extends Model
{
    use HasFactory;
    protected $table = 'chitietxuatkho';

	protected $fillable = ['ctxk_soluong','ctxk_thanhtien','vt_id','xk_id'];
    // public function xuatkho(){
    //     return $this->belongsTo(XuatKho::class, 'xk_id');
    // }
    
}
