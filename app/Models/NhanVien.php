<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
    protected $table = 'nhanvien';

	protected $fillable = ['nv_ma','nv_ten','nv_gioitinh','nv_ngaysinh','nv_cmnd','nv_quequan','nv_sdt','nv_email','nv_ngayvaolam','pb_id','users_id'];

    public function phongban(){
        return $this->belongsTo(PhongBan::class, 'pb_id');
    }
}
