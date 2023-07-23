<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongTinCongTy extends Model
{
    use HasFactory;
    protected $table = 'thongtincongty';

	protected $fillable = ['cty_ten','cty_diachi','cty_sdt','cty_fax','cty_web','cty_email'];

}
