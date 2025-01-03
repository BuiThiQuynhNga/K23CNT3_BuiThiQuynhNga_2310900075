@extends('_layouts.admins._master')
@section('title','Danh sach loai san pham')
@section('content-body')
    <div class="container borer">
        <div class="row ">
            <div class="col-12 ">
                <div class="d-flex w-100 justify-content-between">
                    <h1>Danh sach san pham</h1>
                    <a href="{{route('btqnadmins.btqnsanpham.btqncreate')}}" class="btn btn-success" >Them Moi</a>
                </div>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ma SP</th>
                        <th>Ten SP</th>
                        <th>Picture</th>
                        <th>So Luong</th>
                        <th>Don Gia</th>
                        <th>Trang Thai</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($btqnSanPhams as $item)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td>{{$item->btqnMaSanPham}}</td>
                        <td>{{$item->btqnTenSanPham}}</td>
                        <td>{{$item->btqnHinhAnh}}</td>
                        <td>{{$item->btqnSoLuong}}</td>
                        <td>{{$item->btqnDonGia}}</td>
                        <td>{{$item->btqnTrangThai}}</td>
                        <td>
                            <a class="btn btn-primary mx-2" href="/btqn-admins/btqn-san-pham/btqndetail/{{$item->id}}">View</a>
                            <a class="btn btn-primary" href="/btqn-admins/btqn-san-pham/btqnedit/{{$item->id}}">Edit</a>
                            <a class="btn btn-danger" href="/btqn-admins/btqn-san-pham/btqndelete/{{$item->id}}" onclick="return confirm('Chắc Chưa :))))?')">
                                Delete
                            </a> 
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection