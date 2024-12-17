<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dsach SV</title>
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <div class="card">
                <div class="card-header"></div>
                <h1>Danh sách sinh viên</h1> 
            <div class="card-body">
                <table class="table table-bodered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã Sinh Viên</th>
                            <th>Họ Sinh Viên</th>
                            <th>Tên Sinh Viên</th>
                            <th>Giới Tính</th>
                            <th>Ngày Sinh</th>
                            <th>Nơi Sinh</th>
                            <th>Mã Khoa</th>
                            <th>Học Bổng</th>
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                       @php
                           $stt=0;
                       @endphp
                        @foreach ($btqnSinhViens as $item)
                        @php
                            $stt++;
                        @endphp
                            <tr>
                                <td class="text-center">{{$stt}}</td>
                                <td>{{$item->btqnMaSV}}</td>
                                <td>{{$item->btqnHoSV}}</td>
                                <td>{{$item->btqnTenSV}}</td>
                                <td>{{$item->btqnPhai}}</td>
                                <td>{{$item->btqnNgaySinh}}</td>
                                <td>{{$item->btqnNoiSinh}}</td>
                                <td>{{$item->btqnMaKH}}</td>
                                <td>{{$item->btqnHocBong}}</td>
                                <td class="text-center">
                                    View / Edit / Delete
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h3>Tổng số sinh viên: {{$btqnSinhViens->count()}}</h3>
                <a href="/btqn-sinhviens/create" class="btn btn-primary">Thêm Mới</a>
            </div>
        </div>
    </section>
</body>
</html>