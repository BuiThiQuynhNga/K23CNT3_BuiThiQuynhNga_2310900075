<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\request;

use Illuminate\Support\Facades\DB;

class BtqnKhoaController extends Controller
{
    //#Đọc dữ liệu từ bảng khoa 
    public function btqnGetAllKhoa()
    {
        //Truy vấn đọc dữ liệu từ bẳng khoa
        $btqnKhoas = DB::select(" Select * from btqnkhoa ");
        // chuyển dữu liệu lên view để hiển thị 
        return view('btqnKhoa.btqnList',['btqnKhoas' => $btqnKhoas]);
    }
    //chi tiết khoa
    public function btqnGetKhoa($makh)
    {
        $khoa = DB::select("select * from btqnkhoa where btqnmakh = ?", [$makh])[0];
        return view('btqnKhoa.btqnDetail',['khoa'=>$khoa]);
    }
    //edit
    public function btqnEdit($makh)
    {
        $khoa = DB::select("select * from btqnkhoa where btqnmakh = ?", [$makh])[0];
        return view('btqnKhoa.btqnedit',['khoa'=>$khoa]);
    }
    //edit submit
    public function btqnEditSubmit($makh,Request $request)
    {
        //lấy dữ liệu mới trên form sửa
        $makh = $request->input('BTQNMAKH');
        $tenkh = $request->input('BTQNKH');
        DB::update("Update btqnkhoa SET BTQNKH = ? WHERE BTQNMAKH = ?",[$tenkh,$makh]);
        return redirect('/khoas');
    }
}
