<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiethoadonban extends Model
{
    use HasFactory;
    protected $table = 'chitiethoadonban';
    protected $fillable = [
        'MaOp',
        'MaHoaDon',
        'SoLuong',
        'TamTinh'
    ];
}