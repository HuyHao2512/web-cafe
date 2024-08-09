<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>

</head>
<body>   
@extends('Admin.header')
@section('main-admin')
<h2>Chỉnh sửa thông tin nhân viên</h2>   
@foreach ($staff as $item)
<form method="post" action="/admin/edit_staff/{{$item->NV_MA}}">
    @csrf
    <div class="container">
        <div class="card p-5 mx-5">
            <div class=" mb-3 row">
                <label for="L_TENLOAI">Tên nhân viên</label>
                <input type="text" name="NV_HOTEN" placeholder="Tên nhân viên" class="form-control" value="{{$item->NV_HOTEN}}" required maxlength="20">
            </div>
            <div class=" mb-3 row">
                <label for="L_TENLOAI">Địa chỉ</label>
                <input type="text" name="NV_DIACHI" placeholder="Địa chỉ" class="form-control" value="{{$item->NV_HOTEN}}" required maxlength="50">
            </div>
            <div class=" mb-3 row">
                <label for="L_TENLOAI">Số điện thoại</label>
                <input type="number" name="NV_SDT" placeholder="Số điện thoại" class="form-control" value="{{$item->NV_SDT}}" required maxlength="10">
            </div>
            <div class=" mb-3 row">
                <label>Giới tính (0: nam, 1: nữ)</label>
                <select name="NV_GIOITINH" {{$item->NV_GIOITINH}}>
                    <option>0</option>
                    <option>1</option>
                </select>
            </div>
            <div class=" mb-3 row">
                <label for="NV_NGAYSINH">Ngày sinh</label>
                <input type="date" id="birthday" name="NV_NGAYSINH" class="form-control" value="{{$item->NV_NGAYSINH}}" required>
            </div>
            <div class=" mb-3 row">
                <label for="NV_EMAIL">Email</label>
                <input type="text" name="NV_EMAIL" placeholder="Email" class="form-control" value="{{$item->NV_EMAIL}}" required maxlength="20">
            </div>
            <div class=" mb-3 row">
                <label for="NV_TAIKHOAN">Username</label>
                <input type="text" name="NV_TAIKHOAN" placeholder="Tài khoản" class="form-control" value="{{$item->NV_TAIKHOAN}}" required maxlength="10">
            </div>
            <div class=" mb-3 row">
                <label for="L_TENLOAI">Mật khẩu</label>
                <input type="text" name="NV_MATKHAU" placeholder="Mật khẩu" class="form-control" value="{{$item->NV_MATKHAU}}" required maxlength="16">
            </div>
            <button type="submit" class="btn btn-primary row">Cập nhật</button>
        </div>
    </div>
</form>
@endforeach
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/js/scripts.js"></script>
</body>
</html>