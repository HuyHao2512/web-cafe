<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trang chủ</title>
        <link rel="stylesheet"  href="css/styles.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"  href="css/css-index.css"/>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>
    </head>
    <body>
        @extends('layouts.header')
        @section('main')
            <div>
                <div id="demo" class="carousel slide h-100" data-bs-ride="carousel">
                    <div class="carousel-inner h1-100">
                        <div class="carousel-item active h1-100 position-relative" data-bs-ride="10000">
                            <img src="img/banner1.jpg"  class="d-block w-100 h-100 object-fit-cover" >
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner2.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner3.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner4.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner5.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class=" container-md container-fluid">
                <div class="row">
                    <div class="col-md-4 text-center text-md-center">
                        <h4 class="head4">Chào mừng bạn đến với The Coffee House</h4>
                    </div>
                    <div class="col-md-6 ">
                        <img class="picture1" src="img/picture1.jpg">
                    </div>
                </div>
            </div>
            <br>
            <br>
                <div class="container mt-3">
                    <h2 class="head4 text-center">Thông tin liên hệ</h2>
                    <div class="row">
                        <div class="col-sm-5 p-3 bg-primary-subtle">
                            <form class="needs-validation" novalidate action="trangchu.html" method="post">
                                <div class="form-group mb-3">
                                    <label for="option" class="form-label ghichu1">Quý khách có nhu cầu liên hệ vì muốn:</label>
                                    <input required class="form-control" list="options" name="option" id="option">
                                    <datalist id="options">
                                        <option value="Góp ý cải thiện">
                                        <option value="Hợp tác cùng phát triển">
                                        <option value="Khiếu nại - Phản ánh">
                                    </datalist>
                                    <div class="invalid-feedback">Vui lòng chọn một trong số các lựa chọn.</div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name" class="ghichu1">Họ tên:</label>
                                    <input required type="text" class="form-control" id="name" placeholder="Nhập họ tên" name="name">
                                    <div class="invalid-feedback">Vui lòng nhập họ tên.</div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email" class="ghichu1">Email:</label>
                                    <input required type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
                                    <div class="invalid-feedback">Vui lòng nhập email.</div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="sdt" class="ghichu1">Số điện thoại:</label>
                                    <input required pattern="\d{10}" type="text" class="form-control" id="sdt" placeholder="Nhập số điện thoại liên lạc" name="sdt">
                                    <div class="invalid-feedback">Vui lòng nhập số điện thoại.</div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="comment" class="ghichu1">Nội dung liên hệ:</label>
                                    <textarea required class="form-control" rows="5" id="comment" placeholder="Nhập nội dung liên hệ" name="text"></textarea>
                                    <div class="invalid-feedback">Vui lòng nhập nội dung liên hệ.</div>
                                </div>
                                <div class="form-check mb-3">
                                    <label class="form-check-label">
                                    <input required class="form-check-input" type="checkbox" name="guarantee"> Tôi cam đoan thông tin cung cấp trên đây là đúng sự thật.
                                    <div class="invalid-feedback">Chọn để tiếp tục.</div>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Gửi liên hệ</button>
                                <button type="reset" class="btn btn-primary">Xóa câu trả lời</button>
                            </form>
                        </div>
        
                        <div class="col-sm-7 p-3 bg-primary-subtle">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1168.065317155848!2d105.76893074842931!3d10.026134203154362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1699430487707!5m2!1svi!2s"
                                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Our Address" width="600" height="450">
                            </iframe>
                            <hr>
                            <h1 class="ghichu">The Coffee House</h1>
                            <blockquote class="blockquote ghichu1">
                                <p>"Xin hân hạnh được hỗ trợ quý khách hàng."</p>
                                <p>Số điện thoại: <b><mark>033.344.4555</mark></b></p>
                            </blockquote>
                        </div>
                    </div>
                </div>      
                <br>
                <script>
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            var forms = document.getElementsByClassName('needs-validation');
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>

        @endsection
    </body>
</html>
