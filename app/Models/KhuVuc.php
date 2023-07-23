<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuVuc extends Model
{
    use HasFactory;
    protected $table = 'khuvuc';

    protected $fillable = ['kv_ma','kv_ten'];
}
