<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm loại sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>
</head>
<body>
@extends('Admin.header')
@section('main-admin')
    <h3>Thêm loại sản phẩm</h3>
    <form method="post" action="/admin/store_type">
    @csrf
    <div class="card p-5">
        <div class=" mb-3 row">
            @if(session('success'))
                <div id="alert" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div id="alert" class="alert alert-warning">
                    {{ session('error') }}
                </div>
            @endif
            <label for="L_TENLOAI">Tên loại:</label>
            <input type="text" name="L_TENLOAI" placeholder="Tên loại" class="form-control" value="" required maxlength="10">
        </div>
        <button type="submit" class="btn btn-primary row">Thêm</button>
    </div>

@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/js/scripts.js"></script>
</body>
</html>
