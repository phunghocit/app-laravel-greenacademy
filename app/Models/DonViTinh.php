<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonViTinh extends Model
{
    use HasFactory;
    protected $table = 'donvitinh';

	protected $fillable = ['dvt_ma','dvt_ten'];
    // public function vattu()
    // {
    //     return $this->hasMany(VatTu::class, 'vt_id');
    // }
}
