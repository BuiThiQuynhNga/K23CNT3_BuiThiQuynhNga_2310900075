<?php

namespace App\Http\Controllers;
use App\Models\BTQN_SAN_PHAM;
use App\Models\BTQN_LOAI_SAN_PHAM;
use Illuminate\Http\Request;

class BTQN_SAN_PHAMController extends Controller
{
    //CRUD

    // Get Read all
    public function btqnList()
    {
        $btqnSanPhams= BTQN_SAN_PHAM::where('btqnTrangThai',0)->get();
        return view('btqnAdmins.btqnSanPham.btqnlist',['btqnSanPhams'=>$btqnSanPhams]);
    }
    //Get : create
    public function btqnCreate()
    {
        //doc du lieu tu bang btqn loai san pham
        $btqnLoaiSanPhams= BTQN_LOAI_SAN_PHAM::all();
        return view('btqnAdmins.btqnSanPham.btqncreate',['btqnLoaiSanPhams'=> $btqnLoaiSanPhams]);
    }
    //Post:createsubmit
    public function btqnCreateSubmit(Request $request)
    {
        return redirect()->route('btqnadmins.btqnsanpham.btqnlist');
    }
    // Edit
    public function btqnEdit($id)
    {
        $btqnSanPham = BTQN_SAN_PHAM::find($id);
        return view('btqnAdmins.btqnSanPham.btqnedit',['btqnSanPham'=>$btqnSanPham]);
    }
    //EditSubmit
    public function btqnEditSubmit(Request $request)
    {
         //validation data
         $valodationDate = $request->validate([
            'btqnMasanPham'=>'required|unique:btqn_san_pham',
            'btqnTenSanPham'=>'required',
            'btqnSoLuong'=>'required',
            'btqnDonGia'=>'required',
            'btqnTrangThai'=>'required',
        ]);
         //ghi du lieu xuong db
         $btqnSanPham = BTQN_SAN_PHAM::find($request->id);
         $btqnSanPham->btqnMaSanPham= $request->btqnMaSanPham;
         $btqnSanPham->btqnTenSanPham= $request->btqnTenSanPham;
         $btqnSanPham->btqnHinhAnh= $request->btqnHinhAnh;
         $btqnSanPham->btqnSoLuong= $request->btqnSoLuong;
         $btqnSanPham->btqnDonGia= $request->btqnDonGia;
         $btqnSanPham->btqnTrangThai= $request->btqnTrangThai;
         $btqnSanPham->save();
         return redirect()->route('btqnadmins.btqnsanpham.btqnlist');
    }
    //delete
    public function btqnDelete($id)
    {
        $btqnLoaiSanPham = BTQN_SAN_PHAM::find($id);
        $btqnLoaiSanPham->delete();
        return view('btqnadmins.btqnsanpham');
    }
}
