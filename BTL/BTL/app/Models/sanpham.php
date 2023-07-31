<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    protected $table = 'OpDienThoai';
    protected $primaykey = 'id';
    protected $fillable = [
        'id',
        'TenOp', 
        'Anh', 
        'MoTa', 
        'MaLOp',
        'Giaban',
        'Soluong'
    ];
        // public $timestamps = false;
}
