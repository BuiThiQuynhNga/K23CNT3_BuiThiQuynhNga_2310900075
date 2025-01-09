@extends('_layouts.admins._master')
@section('title', 'Chỉnh Sửa Quản Trị Viên')

@section('content-body')
    <div class="container">
        <form action="{{ route('btqnadmin.btqnquantri.btqnEditSubmit', $btqnquantri->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="btqnTaiKhoan">Tài Khoản</label>
                <input type="text" class="form-control" id="btqnTaiKhoan" name="btqnTaiKhoan" value="{{ $btqnquantri->btqnTaiKhoan }}" required>
                @error('btqnTaiKhoan') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="btqnMatKhau">Mật Khẩu</label>
                <input type="password" class="form-control" id="btqnMatKhau" name="btqnMatKhau">
                @error('btqnMatKhau') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="btqnTrangThai">Trạng Thái</label>
                <select name="btqnTrangThai" id="btqnTrangThai" class="form-control" required>
                    <option value="0" {{ $btqnquantri->btqnTrangThai == 0 ? 'selected' : '' }}>Cho Phép Đăng Nhập</option>
                    <option value="1" {{ $btqnquantri->btqnTrangThai == 1 ? 'selected' : '' }}>Khóa</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Cập Nhật</button>
        </form>
    </div>
@endsection