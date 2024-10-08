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
    <h1 class=" mx-5 mt-3">{{ $pageName }}</h1>   
    <form method="post" action="/admin/store">
    @csrf
    <div class="container">
        <div class="card p-5">
            <div class=" mb-3 row">
                <label for="name">Mã loại</label>
                <td><select name="L_MA"> 
                    @foreach($news as $row)
                        <option>{{$row->L_MA}}</option> 
                    @endforeach
                </select>  
                </td>
            </div>
            <div class=" mb-3 row">
                <label for="SP_TENSANPHAM">Tên sản phẩm:</label>
                <input type="text" name="SP_TENSANPHAM" placeholder="Tên sản phẩm" class="form-control " required maxlength="50">
            </div>
            <div class=" mb-3 row">
                <label for="salary">Giá:</label>
                <input type="number" name="SP_GIA" placeholder="Giá" class="form-control " required maxlength="20">
            </div>
            <div class=" mb-3 row">
                <label for="position">Mô tả:</label>
                <input type="text" name="SP_MOTA" placeholder="Mô tả" class="form-control " required maxlength="250">
            </div>
            <div class=" mb-3 row">
                <label for="ex">Hình ảnh</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="SP_HINHANH">
            </div>       
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
    </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/js/scripts.js"></script>
</body>
</html>