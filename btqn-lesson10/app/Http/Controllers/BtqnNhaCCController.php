<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BtqnNhaCC;

class BtqnNhaCCController extends Controller
{
    //list(r) / create / edit / delete
    public function list()
    {
        //lấy dữ liệu từ DB thông qua ORM
        $btqnNhaCCs= BtqnNhaCC::all();
        return view('BtqnNhacc.List',['btqnNhaCCs'=>$btqnNhaCCs]);
    }
}
