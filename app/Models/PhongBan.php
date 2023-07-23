<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongBan extends Model
{
    use HasFactory;
    protected $table = 'phongban';

	protected $fillable = ['pb_ma','pb_ten'];
    public function nhanvien()
    {
        return $this->hasMany(NhanVien::class, 'nv_id');
    }
}
