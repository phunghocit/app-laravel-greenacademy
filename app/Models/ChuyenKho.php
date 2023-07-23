<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuyenKho extends Model
{
    use HasFactory;
    protected $table = 'chuyenkho';

	protected $fillable = ['ck_ma','ck_ngay','ck_lydo','nv_id','ck_tongtien'];
    public function chitietchuyenkho()
    {
        return $this->hasOne(ChuyenKho::class, 'ck_id');
    }
}
