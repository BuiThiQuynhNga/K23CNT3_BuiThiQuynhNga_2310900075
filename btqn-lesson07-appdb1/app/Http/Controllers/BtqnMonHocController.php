<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BtqnMonHocController extends Controller
{
    //#1.Dsach môn học(list)
    public function btqnList()
    {
        $btqnMonHocs = DB::table('btqnmonhoc')->get();
        return view('btqnMonHoc.btqnList',['btqnMonHocs'=>$btqnMonHocs]);
    }
}
