<ul class="list-group">
    <!-- Hiển thị tên tài khoản nếu đã đăng nhập -->
    <li class="list-group-item active" style="color: red; background:black;">
        @if(Session::has('username'))
            <span class="fw-bold">Hello, {{ Session::get('username') }}</span>
        @else
            <a href="/btqn-admins/btqn-login" class="text-decoration-none text-dark">Đăng nhập</a>
        @endif
    </li>

    <li class="list-group-item active" aria-current="true">
        <strong>Quản Trị Nội Dung</strong>
    </li>


    <li class="list-group-item">
        <a href="/btqn-admins/btqndanhsachquantri/btqndanhmuc" class="text-decoration-none text-dark">Danh Sách Quản Trị</a>
    </li>

    <li class="list-group-item">
        <a href="/btqn-admins/btqn-quan-tri" class="text-decoration-none text-dark">Quản trị Viên</a>
    </li>

    <li class="list-group-item">
        <a href="/btqn-admins/btqn-loai-san-pham" class="text-decoration-none text-dark">Loại Sản Phẩm</a>
    </li>

    <li class="list-group-item">
        <a href="/btqn-admins/btqn-san-pham" class="text-decoration-none text-dark">Sản Phẩm</a>
    </li>

    <li class="list-group-item">
        <a href="/btqn-admins/btqn-khach-hang" class="text-decoration-none text-dark">Khách Hàng</a>
    </li>

    <li class="list-group-item">
        <a href="/btqn-admins/btqn-hoa-don" class="text-decoration-none text-dark">Hóa Đơn</a>
    </li>

    <li class="list-group-item">
        <a href="/btqn-admins/btqn-ct-hoa-don" class="text-decoration-none text-dark">Chi Tiết Hóa Đơn</a>
    </li>

    <li class="list-group-item">
        <a href="/btqn-admins/btqn-tin-tuc" class="text-decoration-none text-dark">Tin Tức</a>
    </li>

</ul>