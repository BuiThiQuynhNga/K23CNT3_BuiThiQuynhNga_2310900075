@extends('_layouts.admins._master')
@section('title', 'Thêm Quản Trị Viên')

@section('content-body')
    <div class="container">
        <form action="{{ route('btqnadmin.btqnquantri.btqnCreateSubmit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="btqnTaiKhoan">Tài Khoản</label>
                <input type="text" class="form-control" id="btqnTaiKhoan" name="btqnTaiKhoan" required>
                @error('btqnTaiKhoan') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="btqnMatKhau">Mật Khẩu</label>
                <input type="password" class="form-control" id="btqnMatKhau" name="btqnMatKhau" required>
                @error('btqnMatKhau') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="btqnTrangThai">Trạng Thái</label>
                <select name="btqnTrangThai" id="btqnTrangThai" class="form-control" required>
                    <option value="0">Cho Phép Đăng Nhập</option>
                    <option value="1">Khóa</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Thêm Quản Trị Viên</button>
        </form>
    </div>
@endsection