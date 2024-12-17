<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới sinh viên</title>
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
       <form action="{{route('BtqnSinhVien.btqnCreateSubmit')}}" method="POST">
        @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Thêm mới sinh viên</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="btqnMaSV" class="col-sm-2 col-form-label">  Mã Sinh Viên</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="btqnMaSV" name="btqnMaSV">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="btqnHoSV" class="col-sm-2 col-form-label">  Họ Sinh Viên</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="btqnHoSV" name="btqnHoSV">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="btqnTenSV" class="col-sm-2 col-form-label">  Tên Sinh Viên</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="btqnTenSV" name="btqnTenSV">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="btqnGioiTinh" class="col-sm-2 col-form-label"> Giới Tính</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="btqnGioiTinh" name="btqnGioiTinh">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="btqnNgaySinh" class="col-sm-2 col-form-label"> Ngày Sinh</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="btqnNgaySinh" name="btqnNgaySinh">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="btqnNoiSinh" class="col-sm-2 col-form-label"> Nơi Sinh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="btqnNoiSinh" name="btqnNoiSinh">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="btqnMaKH" class="col-sm-2 col-form-label"> Mã Khoa</label>
                        <div class="col-sm-10">
                            <select name="btqnMaKH" id="btqnMaKH">
                                <option value="">CHỌN KHOA</option>
                                <option value="AV">Anh Văn</option>
                                <option value="TH">Tin Học</option>
                                <option value="TN">Tự Nhiên</option>
                                <option value="TR">Triết Học</option>
                            </select>
                        </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary"> Thêm Mới</button>
                    <a href="/btqn-sinhviens" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
       </form>
    </section>
</body>
</html>