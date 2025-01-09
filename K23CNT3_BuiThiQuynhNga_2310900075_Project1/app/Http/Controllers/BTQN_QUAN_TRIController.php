<?php

namespace App\Http\Controllers;

use App\Models\BTQN_QUAN_TRI; // Để sử dụng Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Để sử dụng session

class BTQN_QUAN_TRIController extends Controller
{
    
    // Hiển thị trang đăng nhập
    public function btqnLogin()
    {
        return view ('btqnLogin.btqn-login');
    }

    // Xử lý đăng nhập
    public function btqnLoginSubmit(Request $request)
    {
        // Xác thực tài khoản và mật khẩu
        $request->validate([
            'btqnTaiKhoan' => 'required|string',
            'btqnMatKhau' => 'required|string',
        ]);

        // Tìm người dùng trong bảng BTQN_QUAN_TRI
        $user = BTQN_QUAN_TRI::where('btqnTaiKhoan', $request->btqnTaiKhoan)->first();

        // Kiểm tra người dùng tồn tại và mật khẩu chính xác
        if ($user && Hash::check($request->btqnMatKhau, $user->btqnMatKhau)) {
            // Đăng nhập thành công
            Auth::loginUsingId($user->id);

            // Lưu tên tài khoản vào session
            Session::put('username', $user->btqnTaiKhoan);

            // Chuyển hướng về trang admin với thông báo thành công
            return redirect('/btqn-admins')->with('message', 'Đăng Nhập Thành Công');
        } else {
            // Thông báo lỗi nếu tài khoản hoặc mật khẩu không chính xác
            return redirect()->back()->withErrors(['btqnMatKhau' => 'Tài khoản hoặc mật khẩu không đúng']);
        }
    }

    // Hiển thị danh sách quản trị viên
    public function btqnList()
    {
        $btqnquantris = BTQN_QUAN_TRI::all(); // Lấy tất cả quản trị viên
        return view('btqnAdmins.btqnquantri.btqnlist', ['btqnquantris' => $btqnquantris]);
    }

    // Hiển thị chi tiết quản trị viên
    public function btqnDetail($id)
    {
        $btqnquantri = BTQN_QUAN_TRI::find($id); // Lấy thông tin quản trị viên theo ID
        return view('btqnAdmins.btqnquantri.btqndetail', ['btqnquantri' => $btqnquantri]);
    }

    // Hiển thị form thêm mới quản trị viên
    public function btqnCreate()
    {
        return view('btqnAdmins.btqnquantri.btqncreate');
    }

    // Xử lý form thêm mới quản trị viên
    public function btqnCreateSubmit(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'btqnTaiKhoan' => 'required|string|unique:btqn_quan_tri,btqnTaiKhoan',
            'btqnMatKhau' => 'required|string|min:6',
            'btqnTrangThai' => 'required|in:0,1',
        ]);

        // Tạo bản ghi mới trong cơ sở dữ liệu
        $btqnquantri = new BTQN_QUAN_TRI();
        $btqnquantri->btqnTaiKhoan = $request->btqnTaiKhoan;
        $btqnquantri->btqnMatKhau = Hash::make($request->btqnMatKhau); // Mã hóa mật khẩu
        $btqnquantri->btqnTrangThai = $request->btqnTrangThai;
        $btqnquantri->save();

        // Chuyển hướng về trang danh sách với thông báo thành công
        return redirect()->route('btqnadmins.btqnquantri')->with('success', 'Thêm quản trị viên thành công');
    }

    // Hiển thị form chỉnh sửa quản trị viên
    public function btqnEdit($id)
    {
        $btqnquantri = BTQN_QUAN_TRI::find($id); // Lấy thông tin quản trị viên cần chỉnh sửa
        if (!$btqnquantri) {
            return redirect()->route('btqnadmins.btqnquantri')->with('error', 'Không tìm thấy quản trị viên!');
        }
        return view('btqnAdmins.btqnquantri.btqnedit', ['btqnquantri' => $btqnquantri]);
    }

    // Xử lý form chỉnh sửa quản trị viên
    public function btqnEditSubmit(Request $request, $id)
    {
        // Xác thực dữ liệu
        $request->validate([
            'btqnTaiKhoan' => 'required|string|unique:btqn_quan_tri,btqnTaiKhoan,' . $id,
            'btqnMatKhau' => 'nullable|string|min:6', // Cho phép mật khẩu trống
            'btqnTrangThai' => 'required|in:0,1',
        ]);

        // Lấy quản trị viên cần sửa
        $btqnquantri = btqn_QUAN_TRI::find($id);
        if (!$btqnquantri) {
            return redirect()->route('btqnadmins.btqnquantri')->with('error', 'Không tìm thấy quản trị viên!');
        }

        // Cập nhật thông tin
        $btqnquantri->btqnTaiKhoan = $request->btqnTaiKhoan;
        if ($request->btqnMatKhau) {
            $btqnquantri->btqnMatKhau = Hash::make($request->btqnMatKhau); // Cập nhật mật khẩu nếu có
        }
        $btqnquantri->btqnTrangThai = $request->btqnTrangThai;
        $btqnquantri->save();

        return redirect()->route('btqnadmins.btqnquantri')->with('success', 'Cập nhật quản trị viên thành công');
    }

    // Xóa quản trị viên
    public function btqnDelete($id)
    {
        $btqnquantri = btqn_QUAN_TRI::find($id); // Tìm quản trị viên cần xóa
        if (!$btqnquantri) {
            return redirect()->route('btqnadmins.btqnquantri')->with('error', 'Không tìm thấy quản trị viên!');
        }
        $btqnquantri->delete(); // Xóa bản ghi

        return redirect()->route('btqnadmins.btqnquantri')->with('success', 'Xóa quản trị viên thành công');
    }
}