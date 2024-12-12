<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTQN-DSKhoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1>Danh sách Khoa</h1>
        <table class=" table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Khoa</th>
                    <th>Tên khoa</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @php 
                    $stt=0;
                @endphp
                @foreach($btqnKhoas as $item)
                    @php
                        $stt++;
                    @endphp
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$item->BTQNMAKH}}</td>
                        <td>{{$item->BTQNKH}}</td>
                        <td>
                            <a href="/khoas/detail/{{$item->BTQNKH}}" class="btn btn-success">Chi tiết</a>
                            <a href="/khoas/edit/{{$item->BTQNMAKH}}" class="btn btn-primary">Sửa</a>
                            <a href="/khoas/delete/{{$item->BTQNMAKH}}"class="btn btn-danger">Xoá</a>
                            <a href="/khoas/delete/{{$item->BTQNMAKH}}"class="btn btn-danger"
                                 onclick="return confirm('bạn có chắc chắn xoá khoa này không ?')">
                                <i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/khoas/insert" class="btn btn-primary"> Thêm mới</a>
    </section>
</body>
</html>