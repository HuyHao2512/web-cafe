<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đơn hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>

</head>
<body>
    @extends('admin.header')
    @section('main-admin')
<h2 class="mx-5">{{$pageName}}</h2>
<div class="p-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Mã đơn đặt hàng</th>
                <th scope="col">Mã khách hàng</th>
                <th scope="col">Địa chỉ giao hàng</th>
                <th scope="col">Mã nhân viên</th>
                <th scope="col">Phí giao hàng</th>
                <th scope="col">Ngày đặt</th>
                <th scope="col">Tổng tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order as $row)
            <tr>
                <td>{{$row->DDH_MA}}</td>
                <td>{{$row->ID_KHACH_HANG}}</td>
                <td>{{$row->DCGH}}</td>
                <td>{{$row->NV_MA}}</td>
                <td>{{$row->DDH_PHIGIAOHANG}}</td>
                <td>{{$row->DDH_NGAYDAT}}</td>
                <td>{{$row->DDH_TONGTIEN}}</td> 
                <td><form method="post" action="/admin/delete_order/{{$row->DDH_MA}}" onsubmit="return ConfirmDelete( this )">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger mt-1">Xóa</button>
                </form></td>
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