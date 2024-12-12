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
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>Danh sách môn học</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã môn học</th>
                            <th>Tên môn học</th>
                            <th>số tiết</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($btqnMonHocs as $item)
                            <tr>
                                <td></td>
                                <td>{{$item->BTQNMAMH}}</td>
                                <td>{{$item->BTQNTENMH}}</td>
                                <td>{{$item->BTQNSOTIET}}</td>
                                <td>
                                    view/edit/delete
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">
                                <h3>Tổng số môn học : {{$btqnMonHocs->count()}}</h3>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
            
    </section>
</body>
</html>