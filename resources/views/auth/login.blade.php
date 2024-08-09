<!doctype html>
<html lang="en">
  <head>
  	<title>Đăng nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style-login.css">
	<link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>
	</head>
	<body>
	<section class="ftco-section">		
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					@if(session('error'))
						<div id="alert" class="alert alert-warning">
							{{ session('error') }}
						</div>
					@endif
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>WELCOME</h2>
								<p>Bạn chưa có tài khoản?</p>
								<a href="/register" class="btn btn-white btn-outline-white">Sign Up</a>
							</div>
			        </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4" style="font-family: 'Courier New', Courier, monospace">Đăng nhập</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
				<form action="/login" class="signin-form" method="POST">
                    @csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="email">Email</label>
			      			<input name="email" type="email" class="form-control" placeholder="Email" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Mật khẩu</label>
		              <input name="password" type="password" class="form-control" placeholder="Mật khẩu" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Đăng nhập</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Ghi nhớ đăng nhập
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Quên mật khẩu</a>
									</div>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

	</body>
</html>

