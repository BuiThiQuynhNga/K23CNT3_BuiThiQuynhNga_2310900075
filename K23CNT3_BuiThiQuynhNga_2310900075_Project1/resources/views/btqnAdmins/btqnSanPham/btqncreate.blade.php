@extends('_layouts.admins._master')
@section('title','Them moi san pham')
@section('content-body')
    <div class="container border">
        <div class="row ">
            <div class="col">
                <form action="{{route('btqnadmins.btqnsanpham.btqncreatesubmit')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h2>Them moi san pham</h2>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="btqnMaSanPham" class="col-sm-2 col-form-label">Ma SP</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="btqnMaSanPham" name="btqnMaSanPham" value="{{old('btqnMaSanPham')}}">
                                  @error('btqnMaSanPham')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="btqnTenSanPham" class="col-sm-2 col-form-label">Ten SP</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="btqnTenSanPham" name="btqnTenSanPham" value="{{old('btqnTenSanPham')}}">
                                  @error('btqnTenSanPham')
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="btqnHinhAnh" class="col-sm-2 col-form-label">Hinh Anh</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" id="btqnHinhAnh" name="btqnHinhAnh" value="{{old('btqnHinhAnh')}}">
                                  @error('btqnHinhAnh')
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="btqnSoLuong" class="col-sm-2 col-form-label">So Luong</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="btqnSoLuong" name="btqnSoLuong" value="{{old('btqnSoLuong')}}">
                                  @error('btqnSoLuong')
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="btqnDonGia" class="col-sm-2 col-form-label"> Don Gia</label>
                                <div class="col-sm-10">
                                  <input type="double" class="form-control" id="btqnDonGia" name="btqnDonGia" value="{{old('btqnDonGia')}}">
                                  @error('btqnDonGia')
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="btqnMaLoai" class="col-sm-2 col-form-label">Loai danh muc</label>
                                <div class="col-sm-10">
                                    <select name="btqnMaLoai" id="btqnMaLoai" class="form-control">
                                        @foreach ($btqnLoaiSanPhams as $item)
                                            <option value="{{$item->btqnMaLoai}}">{{$item->btqnTenLoai}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="btqnTrangThai" class="col-sm-2 col-form-label">Trang Thai</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="btqnTrangThai1" name="btqnTrangThai" value="1" checked>
                                    <label for="btqnTrangThai1">Hien Thi</label>
                                        &nbsp;
                                    <input type="radio" id="btqnTrangThai0" name="btqnTrangThai" value="0">
                                    <label for="btqnTrangThai0">Khoa</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Ghi lai</button>
                            <a href="{{route('btqnadmins.btqnsanpham.btqnlist')}}" class="btn btn-secondary">quay lai</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection