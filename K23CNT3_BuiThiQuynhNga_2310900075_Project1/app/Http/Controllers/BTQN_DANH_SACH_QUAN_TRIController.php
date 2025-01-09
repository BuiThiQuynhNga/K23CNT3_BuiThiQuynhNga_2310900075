<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\BTQN_SAN_PHAM; 
use App\Models\BTQN_KHACH_HANG; 
use App\Models\BTQN_TIN_TUC; 
class BTQN_DANH_SACH_QUAN_TRIController extends Controller
{
    //
        // Danh mục
        public function danhmuc()
        {
            // Truy vấn số lượng sản phẩm
            $productCount = BTQN_SAN_PHAM::count();
        
            // Truy vấn số lượng người dùng
            $userCount = BTQN_KHACH_HANG::count();
            $ttCount = BTQN_TIN_TUC::count();

        
            // Trả về view và truyền cả productCount và userCount
            return view('btqnAdmins.btqndanhsachquantri.btqndanhmuc', compact('productCount', 'userCount','ttCount'));
        }

        public function nguoidung()
        {
            $btqnnguoidung = BTQN_KHACH_HANG::all();
        
            // Chuyển đổi btqnNgayDangKy thành đối tượng Carbon thủ công
            foreach ($btqnnguoidung as $user) {
                // Chuyển đổi ngày tháng thành đối tượng Carbon nếu chưa phải là Carbon
                $user->btqnNgayDangKy = Carbon::parse($user->btqnNgayDangKy);
            }
        
            return view('btqnAdmins.btqndanhsachquantri.btqndanhmuc.btqnnguoidung', ['btqnnguoidung' => $btqnnguoidung]);
        }
        

        public function tintuc()
        {
            // Retrieve all news articles from the database (assuming you have a model named BTQN_TIN_TUC)
            $btqntintucs = BTQN_TIN_TUC::all();  // Fetching all articles
        
            // Loop through articles and add the full URL to the image
            foreach ($btqntintucs as $article) {
                // Assuming btqnHinhAnh stores the image name, we'll prepend the 'public/storage' path
                $article->image_url = asset('images/' . $article->tqnHinhAnh);
            }
        
            // Return the view and pass the articles to it
            return view('btqnAdmins.btqndanhsachquantri.btqndanhmuc.btqntintuc', [
                'btqntintucs' => $btqntintucs, // Passing the news articles to the view
            ]);
        }
        
    

    // Hiển thị danh sách sản phẩm
    public function sanpham()
    {
        $btqnsanphams = BTQN_SAN_PHAM::all(); // Lấy tất cả sản phẩm
        return view('btqnAdmins.btqndanhsachquantri.btqndanhmuc.btqnsanpham', ['btqnsanphams' => $btqnsanphams]);
    }

    // Hiển thị mô tả chi tiết sản phẩm
    public function mota($id)
    {
        // Lấy sản phẩm theo id
        $product = BTQN_SAN_PHAM::find($id);
        
        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$product) {
            return redirect()->route('btqnAdmins.btqndanhsachquantri.danhmuc.sanpham')
                             ->with('error', 'Sản phẩm không tồn tại.');
        }

        // Trả về view với thông tin sản phẩm
        return view('btqnAdmins.btqndanhsachquantri.btqndanhmuc.btqnmota', ['product' => $product]);
    }
}