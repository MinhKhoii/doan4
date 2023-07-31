<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    use HasFactory;
    protected $table = 'loaiOp';
    protected $fillable = [
        'id',
        'TenLOp', 
        'MoTa', 
    ];
    // public $timestamps = false;
}
