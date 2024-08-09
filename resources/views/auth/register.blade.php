<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>Đăng ký</title>
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Main CSS-->
    <link href="css/main-reg.css" rel="stylesheet" media="all">
    <link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Đăng ký</h2>
                    <form method="post" action="/register" id="register">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Họ tên</label>
                                    <input class="input--style-4" type="text" name="name" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" required>
                                </div>
                            </div>
                        </div>                       
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mật khẩu</label>
                                    <input class="input--style-4" type="password" name="password" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nhập lại mật khẩu</label>
                                    <input class="input--style-4" type="password" name="confirmpassword" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">                      
                            <div class="p-t-15 col-2" style="margin-top: 6px;">
                                <button class="btn btn--radius-2 btn--blue" type="submit">Đăng ký</button>
                            </div>
                            <div class="col-2">
                                <div >
                                    <p>Bạn đã có tài khoản?</p>
                                    <a href="/login" class="btn btn--radius-2 btn--green" style="text-decoration: none">Đăng nhập</a>
                                </div>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<script>
    document.getElementById("register").addEventListener("submit", function(event) {
        var password = document.getElementById("password").value;
        var confirmpassword = document.getElementById("confirmpassword").value;

        if (password !== confirmPassword) {
            alert("Mật khẩu chưa đúng");
            event.preventDefault(); // Ngăn form được submit nếu mật khẩu không khớp
        }
    });
</script>
</html>
