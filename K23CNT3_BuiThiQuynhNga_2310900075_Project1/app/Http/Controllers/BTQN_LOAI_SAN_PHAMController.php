<?php

namespace App\Http\Controllers;
use App\Models\BTQN_LOAI_SAN_PHAM;
use Illuminate\Http\Request;

class BTQN_LOAI_SAN_PHAMController extends Controller
{
    //admin : CRUD

    //list
    public function btqnList()
    {
        $btqnLoaiSanPhams = BTQN_LOAI_SAN_PHAM::all();

        return view('btqnAdmins.btqnLoaiSanPham.btqnlist',['btqnLoaiSanPhams'=>$btqnLoaiSanPhams]);
    }
    //create
    public function btqnCreate()
    {
        return view('btqnadmins.btqnloaisanpham.btqncreate');
    }
    public function btqnCreateSubmit(Request $request)
    {
        //validation data
        $valodationDate = $request->validate([
            'btqnMaLoai'=>'required|unique:btqn_loai_san_pham',
            'btqnTenLoai'=>'required',
        ]);
        //ghi du lieu xuong db
        $btqnLoaiSanPham = new BTQN_LOAI_SAN_PHAM;
        $btqnLoaiSanPham->btqnMaLoai= $request->btqnMaLoai;
        $btqnLoaiSanPham->btqnTenLoai= $request->btqnTenLoai;
        $btqnLoaiSanPham->btqnTrangThai= $request->btqnTrangThai;
        $btqnLoaiSanPham->save();
        return redirect()->route('btqnadmins.btqnloaisanpham');
    }
    //edit
    public function btqnEdit($id)
    {
        $btqnLoaiSanPham = BTQN_LOAI_SAN_PHAM::find($id);
        return view('btqnAdmins.btqnLoaiSanPham.btqnedit',['btqnLoaiSanPham'=>$btqnLoaiSanPham]);
    }
    //edirsubmit
    public function btqnEditSubmit(Request $request)
    {
        //validation data
        $valodationDate = $request->validate([
            'btqnMaLoai'=>'required|unique:btqn_loai_san_pham',
            'btqnTenLoai'=>'required',
        ]);
         //ghi du lieu xuong db
         $btqnLoaiSanPham = BTQN_LOAI_SAN_PHAM::find($request->id);
         $btqnLoaiSanPham->btqnMaLoai= $request->btqnMaLoai;
         $btqnLoaiSanPham->btqnTenLoai= $request->btqnTenLoai;
         $btqnLoaiSanPham->btqnTrangThai= $request->btqnTrangThai;
         $btqnLoaiSanPham->save();
         return redirect()->route('btqnadmins.btqnloaisanpham');
    }
    public function btqnDelete($id)
    {
        $btqnLoaiSanPham = BTQN_LOAI_SAN_PHAM::find($id);
        $btqnLoaiSanPham->delete();
        return view('btqnadmins.btqnloaisanpham');
    }
}
