<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>

    <style>
        .btn-them{
                position: fixed;
                bottom: 20px;
                right: 30px;
            }
    </style>
</head>
<body>
@extends('Admin.header')
@section('main-admin')
<h2 class="mx-5">Danh mục loại sản phẩm</h2>
<div class="p-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID loại</th>
                <th scope="col">Tên Loại</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($type as $row)
        <tr>
            <td class="">{{$row->L_MA}}</td>
            <td>{{$row->L_TENLOAI}}</td>       
            <td><a href="/admin/edit_type/{{$row->L_MA}}" class="text-decoration-none text-black btn btn-warning float-end">Chỉnh sửa</a></td> 
        </tr>
        @endforeach
        </tbody>          
    </table>
</div>
<div>
    <button class="btn btn-primary btn-them">
        <a class="text-decoration-none text-white" href="/admin/create_type">Thêm</a>
    </button>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/js/scripts.js"></script>

</body>
</html>