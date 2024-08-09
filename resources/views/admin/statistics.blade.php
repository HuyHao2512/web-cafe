<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.css">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>

</head>
<body>
    
@extends('admin.header')
@section('main-admin')
<div class="row p-5">
    <div class="col-4">
      <div class="card">
        <div class="card-body text-center">
          <h5 class="mb-2 text-dark font-weight-normal">Tổng số đơn hàng đã đặt</h5>
          <h2 class="mb-4 text-dark font-weight-bold">{{$count}}</h2>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-body text-center">
          <h5 class="mb-2 text-dark font-weight-normal">Tổng doanh thu</h5>
          <h2 class="mb-4 text-dark font-weight-bold">{{number_format($price,0,'.',',')}}đ</h2>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-body text-center">
          <h5 class="mb-2 text-dark font-weight-normal">Tổng số khách hàng</h5>
          <h2 class="mb-4 text-dark font-weight-bold">{{$customer}}</h2>
        </div>
      </div>
    </div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/js/scripts.js"></script>
</body>
</html>