@extends('_layouts.admins._master')
@section('title','Danh sach loai san pham')
@section('content-body')
    <div class="container border">
        <div class="row ">
            <div class="col-12 ">
                <div class="d-flex w-100 justify-content-between">
                    <h1>Danh sach loai san pham</h1>
                    <a href="{{route('btqnadmins.btqnloaisanpham.btqncreate')}}" class="btn btn-success" >Them Moi</a>
                </div>
            </div>
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ma Loai</th>
                            <th>Ten Loai</th>
                            <th>Trang Thai</th>
                            <th>Chuc Nang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($btqnLoaiSanPhams as $item)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{$item->btqnMaLoai}}</td>
                                <td>{{$item->btqnTenLoai}}</td>
                                <td>{{$item->btqnTrangThai}}</td>
                                <td>
                                    <a class="btn btn-primary mx-2" href="/btqn-admins/btqn-loai-san-pham/btqnview/{{$item->id}}">View</a>                                   
                                    <a class="btn btn-primary" href="/btqn-admins/btqn-loai-san-pham/btqnedit/{{$item->id}}">Edit</a>
                                    <a class="btn btn-danger" href="/btqn-admins/btqn-loai-san-pham/btqndelete/{{$item->id}}" onclick="return confirm('Chắc Chưa :))))?')">
                                    Delete
                                    </a> 
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="5"> Chua co thong tin loai san pham</th>           
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection