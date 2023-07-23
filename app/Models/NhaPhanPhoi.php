<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaPhanPhoi extends Model
{
    use HasFactory;
    protected $table = 'nhaphanphoi';

	protected $fillable = ['npp_ma','npp_ten','npp_diachi','npp_sdt','npp_fax','npp_email','npp_taikhoan','npp_nhanviendaidien','kv_id'];

}
