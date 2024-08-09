<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>The Coffee House</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.css">
        <link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>
        <style>
            footer{
                background-color: #212529;
                color: white;
                padding: 20px;
            }
            
            .sub_footer {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .sub_footer a{
                color: aliceblue;
            }
            .column {
                flex: 1;
                text-align: center;
            }
            
            .social-icons {
                display: flex;
                justify-content: center;
            }
            
            .social-icons a {
                margin: 0 10px;
                color: white;
                text-decoration: none;
            }
        
            p{
                font-size: 14px;
                padding: 4px;
            }
        
            .image{
                padding: 0;
                width: 50%;
            }
            a.nav-link {
            color: #8d7649 !important;
            font-weight: 500;
            text-align: center;
        }
        #alert {
            transition: opacity 1s ease-in-out;
        }
        #alert.hidden {
            opacity: 0;
        }
        
        </style>
    </head>
    <body class="sb-nav-fixed">        
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/" >The Coffee House</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="/find"   method="GET">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Tìm kiếm..." aria-label="Tìm kiếm..." aria-describedby="btnNavbarSearch" name="keyword"/>
                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">                                               
                        <!--Neu khong co session thi hien dang nhap-->
                        @if (Auth::check())
                        <li><div class="text-center">Xin chào {{ Auth::user()->name }}</div></li>
                        <hr>
                        <li><form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item text-center">Đăng xuất</button>
                        </form>
                        </li>
                    @else
                    <li><a class="dropdown-item" href="login">Đăng nhập</a></li>
                    <li><a class="dropdown-item" href="register">Đăng ký</a></li>
                    @endif

                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav" >
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <hr>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Trang chủ
                            </a>
                            <hr>                     
                            <a class="nav-link" href="products">
                                <div class="sb-nav-link-icon"><i class="fa fa-list-alt"></i></div>
                                Sản phẩm
                            </a>
                            <hr>                           
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Giới thiệu
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>                           
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="intro">Về chúng tôi</a>
                                        <a class="nav-link" href="tch">#CauchuyenTCH</a>
                                    </nav>
                                </nav>
                            </div>
                            <hr>
                            <a class="nav-link" href="/carts">
                                <div class="sb-nav-link-icon"><i class="fas fa-cart-plus"></i></div>
                                Giỏ hàng
                            </a>
                            <hr>
                            @if(Auth::check())
                            <a class="nav-link" href="/donhang">
                                <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>   
                                Đơn hàng                                                              
                            </a>
                            <hr>
                            <a class="nav-link" href="/profile">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>   
                                Thông tin của bạn                                                              
                            </a>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @if(session('success'))
                        <div id="alert" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @yield('main')
                </main>
                <footer>
                    <div class="sub_footer">
                        <div class="column">
                            <p><b>Giới thiệu</b></p>
                            <p><a href="/intro" class="sub_column" style="text-decoration: none">Về Chúng Tôi</a></p>
                            <p><a href="/products" class="sub_column" style="text-decoration: none">Sản Phẩm</a></p>
                            <p><a href="/tch" class="sub_column" style="text-decoration: none">Chuyện Cà Phê</a></p>
                        </div>
                        <div class="column">
                            <p><b>Đặt Hàng</b></p>
                            <p>Liên hệ: 0333444555</p>
                            <p>Khu II, Trường Đại học Cần Thơ,</p>
                            <p>đường 3 tháng 2, quận Ninh Kiều, TPCT.</p>                           
                        </div>
                        <div class="column">
                            <div class="social-icons">
                                <a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a>
                                <a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a>
                            </div>
                        </div>   
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script>
            // Chờ 5 giây rồi ẩn thông báo
            setTimeout(function() {
                document.getElementById('alert').style.display = 'none';
            }, 5000); // 5000 milliseconds = 5 giây
        </script>
    </body>
</html>
