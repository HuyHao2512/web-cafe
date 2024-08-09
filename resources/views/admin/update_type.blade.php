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

</head>
<body>
@extends('Admin.header')
@section('main-admin')
<h3>Chỉnh sửa loại sản phẩm</h3>
    @foreach ($types as $item)
    <form method="post" action="/admin/edit_type/{{$item->L_MA}}">
    @csrf
    <div class="card p-5">
        <div class=" mb-3 row">
            <label for="L_MA">Mã loại:</label>
            <input type="text" name="L_MA" placeholder="Mã loại" class="form-control" value="{{$item->L_MA}}" readonly>
        </div>
        <div class=" mb-3 row">
            <label for="L_TENLOAI">Tên loại:</label>
            <input type="text" name="L_TENLOAI" placeholder="Tên loại" class="form-control" value="{{$item->L_TENLOAI}}" required maxlength="10">
        </div>
        <button type="submit" class="btn btn-primary row">Chỉnh sửa</button>
    </div>

    @endforeach
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/js/scripts.js"></script>

</body>
</html>