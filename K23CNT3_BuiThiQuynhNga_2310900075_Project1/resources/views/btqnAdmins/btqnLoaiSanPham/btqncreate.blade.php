@extends('_layouts.admins._master')
@section('title','Them moi loai san pham')
@section('content-body')
    <div class="container border">
        <div class="row ">
            <div class="col">
                <form action="{{route('btqnadmins.btqnloaisanpham.btqncreatesubmit')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h2>Them moi loai san pham</h2>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="btqnMaLoai" class="col-sm-2 col-form-label">Ma Loai</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="btqnMaLoai" name="btqnMaLoai" value="{{old('btqnMaLoai')}}">
                                  @error('btqnMaLoai')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="btqnTenLoai" class="col-sm-2 col-form-label">Ten Loai</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="btqnTenLoai" name="btqnTenLoai" value="{{old('btqnTenLoai')}}">
                                  @error('btqnTenLoai')
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
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
                            <a href="{{route('btqnadmins.btqnloaisanpham')}}" class="btn btn-secondary">quay lai</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection