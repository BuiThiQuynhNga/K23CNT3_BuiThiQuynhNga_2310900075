@extends('_layouts.admins._master')
@section('title','Sua thong tin san pham')
@section('content-body')
    <div class="container border">
        <div class="row ">
            <div class="col">
                <form action="{{route('btqnadmins.btqnsanpham.btqneditsubmit')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$btqnSanPham->id}}">
                    <div class="card-header">
                            <h2>Sua thong tin san pham</h2>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="btqnMaSanPham" class="col-sm-2 col-form-label">Ma San Pham</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="btqnMaSanPham" name="btqnMaSanPham" value="{{$btqnSanPham->btqnMaSanPham}}">
                                  @error('btqnMaSanPham')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="btqnTenSanPham" class="col-sm-2 col-form-label">Ten San Pham</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="btqnTenSanPham" name="btqnTenSanPham" value="{{$btqnSanPham->btqnTenSanPham}}">
                                  @error('btqnTenSanPham')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="btqnHinhAnh" class="col-sm-2 col-form-label">Hinh Anh</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" id="btqnHinhAnh" name="btqnHinhAnh" value="{{$btqnSanPham->btqnHinhAnh}}">
                                  @error('btqnHinhAnh')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="btqnSoLuong" class="col-sm-2 col-form-label">So Luong</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="btqnSoLuong" name="btqnSoLuong" value="{{$btqnSanPham->btqnSoLuong}}">
                                  @error('btqnSoLuong')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="btqnDonGia" class="col-sm-2 col-form-label">Don Gia</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="btqnDonGia" name="btqnDonGia" value="{{$btqnSanPham->btqnDonGia}}">
                                  @error('btqnDonGia')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="btqnTrangThai" class="col-sm-2 col-form-label">Trang Thai</label>
                                <div class="col-sm-10">
                                @if ($btqnSanPham->btqnTrangThai ===1 )
                                     <input type="radio" id="btqnTrangThai1" name="btqnTrangThai" value="1" checked>
                                    <label for="btqnTrangThai1">Hien Thi</label>
                                        &nbsp;
                                    <input type="radio" id="btqnTrangThai0" name="btqnTrangThai" value="0">
                                    <label for="btqnTrangThai0">Khoa</label>
                                @else
                                    <input type="radio" id="btqnTrangThai1" name="btqnTrangThai" value="1" >
                                    <label for="btqnTrangThai1">Hien Thi</label>
                                        &nbsp;
                                    <input type="radio" id="btqnTrangThai0" name="btqnTrangThai" value="0" checked>
                                    <label for="btqnTrangThai0">Khoa</label>
                                @endif                                    
                                   
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