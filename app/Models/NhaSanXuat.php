<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaSanXuat extends Model
{
    use HasFactory;
    protected $table = 'nhasanxuat';

	protected $fillable = ['nsx_ma','nsx_ten','kv_id'];
}
