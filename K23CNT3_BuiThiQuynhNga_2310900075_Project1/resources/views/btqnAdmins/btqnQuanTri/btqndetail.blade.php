@extends('_layouts.admins._master')
@section('title','Create  Sản Phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('btqnadmin.btqnsanpham.btqnCreateSubmit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới sản phẩm</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="btqnMaSanPham" class="form-label">Mã sản phẩm</label>
                                <input type="text" class="form-control" id="btqnMaSanPham" name="btqnMaSanPham" value="{{ old('btqnMaSanPham') }}" >
                                @error('btqnMaSanPham')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="btqnTenSanPham" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="btqnTenSanPham" name="btqnTenSanPham" value="{{ old('btqnTenSanPham') }}" >
                                @error('btqnTenSanPham')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="btqnHinhAnh" class="form-label">Hình Ảnh</label>
                                <input type="file" class="form-control" id="btqnHinhAnh" name="btqnHinhAnh" accept="image/*">
                                @error('btqnHinhAnh')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            

                            <div class="mb-3">
                                <label for="btqnSoLuong" class="form-label">Số Lượng</label>
                                <input type="number" class="form-control" id="btqnSoLuong" name="btqnSoLuong" value="{{ old('btqnSoLuong') }}" >
                                @error('btqnSoLuong')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="btqnDonGia" class="form-label">Đơn Giá</label>
                                <input type="number" class="form-control" id="btqnDonGia" name="btqnDonGia" value="{{ old('btqnDonGia') }}" >
                                @error('btqnDonGia')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="btqnMaLoai" class="form-label">Loại Danh Muc</label>
                                <select name="btqnMaLoai" id="btqnMaLoai" class="form-control">
                                    @foreach ($btqnloaisanpham as $item)
                                        <option value="{{ $item->id }}">{{ $item->btqnTenLoai }}</option>
                                    @endforeach
                                </select>
                                @error('btqnMaLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            

                            <div class="mb-3">
                                <label for="btqnTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="btqnTrangThai1" name="btqnTrangThai" value="0" checked/>
                                    <label for="btqnTrangThai1"> Hiển Thị</label>
                                    &nbsp;
                                    <input type="radio" id="btqnTrangThai0" name="btqnTrangThai" value="1"/>
                                    <label for="btqnTrangThai0">Khóa</label>
                                </div>
                                @error('btqnTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Create</button>
                            <a href="{{route('btqnadims.btqnsanpham')}}" class="btn btn-primary"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection