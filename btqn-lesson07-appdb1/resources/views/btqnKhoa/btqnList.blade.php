<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTQN-DSKhoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
                            delete
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>