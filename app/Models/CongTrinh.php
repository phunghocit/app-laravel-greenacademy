<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CongTrinh extends Model
{
    use HasFactory;
    protected $table = 'congtrinh';

	protected $fillable = ['ct_ma','ct_ten'];
    // public function xuatkho()
    // {
    //     return $this->hasMany(XuatKho::class, 'xk_id');
    // }
}
