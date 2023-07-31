<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    use HasFactory;  
    protected $table = 'khachhang';
    protected $fillable = [
        'id',
        'UserName',
        'PassWord',
        'HoVaTen',
        'DiaChi',
        'SoDienThoai',
        'Email'
    ];
}
