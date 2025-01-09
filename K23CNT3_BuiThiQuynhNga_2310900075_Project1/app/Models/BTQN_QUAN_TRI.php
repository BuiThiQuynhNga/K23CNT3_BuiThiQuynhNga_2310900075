<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BTQN_QUAN_TRI extends Model
{
    use HasFactory;
    protected $table="BTQN_QUAN_TRI";
    // Chỉ định các cột có thể gán (mass assignable)
    protected $fillable = ['btqnTaiKhoan', 'btqnMatKhau', 'btqnTrangThai'];

    // Tắt timestamp nếu không cần
    public $timestamps = false;
}
