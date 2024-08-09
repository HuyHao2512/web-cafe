<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
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
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Loại</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Mô tả</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($news as $row)
        
        <tr>
            <td>{{$row->SP_MA}}</td>
            <td>{{$row->L_TENLOAI}}</td> 
            <td>{{$row->SP_TENSANPHAM}}</td>
            <td><img src="/img/{{$row->SP_HINHANH}}" height="50px" width="50px"></td>
            <td>{{$row->SP_GIA}}</td>
            <td>{{$row->SP_MOTA}}</td>
            <td><a href="/admin/edit/{{$row->SP_MA}}"  class="text-decoration-none text-black btn btn-warning">Sửa</a> 
                <form method="post" action="/admin/delete/{{$row->SP_MA}}" onsubmit="return ConfirmDelete( this )">
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
<div>
    <button class="btn btn-primary btn-them">
        <a class="text-decoration-none text-white" href="/admin/create">Thêm</a>
    </button>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="public/js/scripts.js"></script>
</body>
</html>