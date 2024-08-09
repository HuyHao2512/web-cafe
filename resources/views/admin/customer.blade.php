<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>
</head>
<body>
    
@extends('admin.header')
@section('main-admin')


<h2 class="mx-5">{{ $pageName }}</h2>  
<div class="p-5">
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID khách hàng</th>
            <th scope="col">ID Giỏ hàng</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Sô điện thoại</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Email</th>
            <th scope="col">Ngày sinh</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customer as $row)
        <tr>
            <td>{{$row->ID_KHACH_HANG}}</td>
            <td>{{$row->GH_MA}}</td>
            <td>{{$row->KH_HOTEN}}</td>
            <td>{{$row->KH_SDT}}</td>
            <td>{{$row->KH_GIOITINH}}</td>
            <td>{{$row->KH_EMAIL}}</td>
            <td>{{$row->KH_NGAYSINH}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/js/scripts.js"></script>
</body>
</html>