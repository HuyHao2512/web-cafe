@extends('layouts.header')
@section('main')
<h2 class="mx-5">Đơn hàng của bạn</h2>
<div class="p-5">
    <table class="table table-striped">
        <thead class="text-center">
            <tr>
                <th scope="col">Địa chỉ giao hàng</th>
                <th scope="col">Ngày đặt</th>
                <th scope="col">Tiền sản phẩm</th>
                <th scope="col">Phí giao hàng</th>
                <th scope="col">Tổng thanh toán</th>
                <th scope="col">Trạng thái</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($donhang as $row)
            <tr>
                <td>{{$row->DCGH}}</td>
                <td>{{$row->DDH_NGAYDAT}}</td>
                <td>{{number_format($row->DDH_TONGTIEN,0,'.',',')}}</td> 
                <td>{{number_format($row->DDH_PHIGIAOHANG,0,'.',',')}}</td>
                <td>{{number_format($row->DDH_TONGTIEN + $row->DDH_PHIGIAOHANG,0,'.',',')}}</td>
                <td>Đã đặt</td>
            </tr>  
            @endforeach
        </tbody>
    </table>
</div>
@endsection