<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatLuong extends Model
{
    use HasFactory;
    protected $table = 'chatluong';

	protected $fillable = ['cl_ma','cl_ten'];
    public function vattu()
    {
        return $this->hasMany(VatTu::class, 'vt_id');
    }
}
