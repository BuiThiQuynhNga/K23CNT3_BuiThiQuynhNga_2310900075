<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BtqnSinhVienController;

class BtqnSinhVien extends Model
{
    use HasFactory;
    protected $table="btqnsinhvien";
    public $timestamps= false;
}
