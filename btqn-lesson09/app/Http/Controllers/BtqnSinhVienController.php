<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BtqnSinhVien;

class BtqnSinhVienController extends Controller
{
    //list , insert, update(edit), delete
    public function btqnList()
        {
            // lấy toàn bộ danh sách sinh viên
            $btqnSinhViens = BtqnSinhVien::all();
            return view('BtqnSinhVien.btqn-list',['btqnSinhViens'=>$btqnSinhViens]);
        }
    //Thêm mới (create)
    public function btqnCreate()
    {
        return view('BtqnSinhVien.btqn-create');
    }
    //Create Submit
    public function btqnCreateSubmit(Request $request)
    {
        //lấy dữ liệu sun=bmit ttreen form gán cho các thuộc tính của đối tượng sinh viên
        $btqnSinhVien= new BtqnSinhVien();
        $btqnSinhVien->btqnMaSV = $request->btqnMaSV;
        $btqnSinhVien->btqnHoSV = $request->btqnHoSV;
        $btqnSinhVien->btqnTenSV = $request->btqnTenSV;
        $btqnSinhVien->btqnPhai = $request->btqnPhai;
        $btqnSinhVien->btqnNgaySinh = $request->btqnNgaySinh;
        $btqnSinhVien->btqnNoiSinh = $request->btqnNoiSinh;
        $btqnSinhVien->btqnMaKH = $request->btqnMaKH;
        //Ghi vào trong csdl
        $btqnSinhVien->save();
        //return view('BtqnSinhVien.btqn-create');
        return back()-> with('btqnSinhVien-created','Đã Thêm Mới Một Sinh Viên Thành Công');
    }
}
