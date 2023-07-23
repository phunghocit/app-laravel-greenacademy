<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhomVatTu extends Model
{
    use HasFactory;
    
	protected $table = 'nhomvattu';

	protected $fillable = ['nvt_ma','nvt_ten'];
    public function vattu()
    {
        return $this->hasMany(VatTu::class, 'vt_id');
    }
}
