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
        $khoa = DB::select("Select * from btqnkhoa where btqnmakh = ?",[$makh])[0];
        return view('btqnKhoa.btqnDetail',['khoa'=>$khoa]);
    }
    //edit
    public function btqnEdit($makh)
    {
        $khoa = DB::select("Select * from btqnkhoa where btqnmakh = ?", [$makh])[0];
        return view('btqnKhoa.btqnEdit',['khoa'=>$khoa]);
    }
    //edit submit
    public function btqnEditSubmit(Request $request)
    {
        //lấy dữ liệu mới trên form sửa
        $makh = $request->input('BTQNMAKH');
        $tenkh = $request->input('BTQNKH');
        DB::update("UPDATE btqnkhoa SET BTQNKH = ? WHERE BTQNMAKH = ?",[$tenkh,$makh]);
        return redirect('/khoas');
    }
    //Ínsert-get
    public function btqnInsert()
    {
        return view('btqnkhoa.btqninsert');
    }
    //insert-post
    public function btqnInsertSubmit(Request $request)
    {
        //ktra dữ liệu nhập
        $validate = $request->validate([
            'BTQNMAKH'=> 'required|max:2',
            'BTQNKH'=> 'required|max:50',
        ],
        [
            'BTQNMAKH.required' =>'Vui lòng nhập mã khoa.',
            'BTQNMAKH.max'   =>'Mã khoa tối đa 2 ký tự.',
            'BTQNKH.required'=>'Vui lòng nhập tên khoa.',
            'BTQNKH.max'     =>'Tên khoa tối đa 50 ký tự.',
        ]
        );
        //lấy dữ liệu trên form 
        $makh = $request->input('BTQNMAKH');
        $tenkh = $request->input('BTQNKH');
        //ghi dữ liệu xuống database
        DB::insert("INSERT INTO btqnkhoa(BTQNMAKH,BTQNKH) Values (?,?)",[$makh,$tenkh]);
        //chuyển sang danh sách
        return redirect('/khoas');
    }
    //#delete
    public function btqnDelete($makh)
    {
        DB::delete("DELETE FROM btqnkhoa WHERE BTQNMAKH=?",[$makh]);
        return redirect('/khoas');
    }
}
