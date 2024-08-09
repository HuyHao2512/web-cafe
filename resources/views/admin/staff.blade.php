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
            <th scope="col">Mã nhân viên</th>
            <th scope="col">Tên nhân viên</th>
            <th scope="col">Sô điện thoại</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Email</th>
            <th scope="col">Ngày sinh</th>
            <th></th>
        </tr>
    </thead>   
    <tbody>
        @foreach($staff as $row)
        <tr>
        <td>{{$row->NV_MA}}</td>
        <td>{{$row->NV_HOTEN}}</td>
        <td>{{$row->NV_SDT}}</td>
        <td>{{$row->NV_DIACHI}}</td>
        <td>{{$row->NV_GIOITINH}}</td>
        <td>{{$row->NV_EMAIL}}</td>
        <td>{{$row->NV_NGAYSINH}}</td>
        <td><a href="/admin/edit_staff/{{$row->NV_MA}}"  class="text-decoration-none text-black btn btn-warning">Sửa</a> 
            <form method="post" action="/admin/delete_staff/{{$row->NV_MA}}" onsubmit="return ConfirmDelete( this )">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger mt-1">Xóa</button>
            </form>
        </td>  
    </tr>
    @endforeach
    </tbody>
</table>
</div>
<button class="btn btn-primary btn-them">
    <a class="text-decoration-none text-white" href="/admin/create_staff">Thêm</a>
</button>
<div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/js/scripts.js"></script>
</body>
</html>