<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.css">
    <title>Tuyển dụng</title>
    <link rel="stylesheet" href="css/css-job.css">
</head>
<body>
    @extends('layouts.header')
    @section('main')
    <header class="navbar">
        <nav>
            <ul class="nav-links">
                <li><a href="" >The Coffe House Careers</a></li>
                <li><a href="#"><i class="fa-solid fa-store"></i>Việc làm ở cửa hàng</a></li>
                <li><a href="#"><i class="fa-sharp fa-solid fa-building"></i>Việc làm văn phòng</a></li>
                <li><a href=""><i class="fa-solid fa-magnifying-glass"></i>Tra cứu kết quả</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="search-container">
        <input type="text" id="search-input" placeholder="Bạn đang tìm kiếm">
        <select id="province-select">
            <option value="all" selected>Chọn tỉnh/Thành phố</option>
            <option value="hanoi">Hà Nội</option>
            <option value="hcm">Hồ Chí Minh</option>
            <option value="danang">Đà Nẵng</option>
            <option value="cantho">Cần Thơ</option>
            <option value="dalat">Đà Lạt</option>
            <option value="vinhlong">Vĩnh Long</option>
            <option value="haugiang">Hậu Giang</a>
        </select>
        <a href=""><button id="search-button">Tìm Kiếm</button></a>
    </div>

    <div class="container">
        <div class="column">
            <h2>Khối cửa hàng</h2>
            <ul>
                <a href=""><li>Quản lý cửa hàng</li></a>
                <a href=""><li>Giám sát ca</li></a>
                <a href=""><li>Pha chế</li></a>
            </ul>
            <button>Xem tất cả công việc khối cửa hàng</button>
        </div>
        <div class="column">
            <h2>Khối cửa hàng</h2>
            <ul>
                <a href=""><li>Chăm sóc khách hàng</li></a>
                <a href=""><li>Quản lý nhân sự</li></a>
                <a href=""><li>Quản lý văn thư, lưu trữ</li></a>
            </ul>
            <button>Xem tất cả công việc khối văn phòng</button>
        </div>
    </div>

    <div class="text-container">
        <div class="text-column">
            <h2>Trụ sở chính tại Cần Thơ</h2>
            <p>Khu II, đường 3 tháng 2, quận Ninh Kiều, TPCT.</p>
            <a href="">Xem bản đồ</a>
            <p>Số điện thoại tuyển dụng: 0123456789</p>
            <p>Email: Nhom03@gmail.com</p>
        </div>
        <div class="text-column">
            <a  href="">Việc làm cửa hàng</a> <br>
            <a  href="">Việc làm văn phòng</a> <br>
            <a  href="">Tra cứu kết quả</a>
        </div>
    </div>

    @endsection

</body>
</html>
