@extends('layouts.header')
@section('main')
@foreach ($user as $item)
<h2 class="mx-5 pt-3">Thông tin cá nhân</h2>
<form method="post" action="/edit_profile/{{$item->ID_KHACH_HANG}}">
    @csrf
    <div class="container mb-5 p-5">
        <div class="card p-5">
            <input type="hidden" name="GH_MA" value="{{$item->GH_MA}}">
            <div class=" mb-3 row">
                <label for="KH_HOTEN">Họ tên:</label>
                <input type="text" name="KH_HOTEN" placeholder="Họ tên" class="form-control" value="{{$item->KH_HOTEN}}" required maxlenght="20">
            </div>
            <div class=" mb-3 row">
                <label for="KH_SDT">SDT:</label>
                <input type="number" name="KH_SDT" placeholder="Số điện thoại" class="form-control" value="{{$item->KH_SDT}}" required maxlenght="20">
            </div>
            <div class=" mb-3 row">
                <label for="SP_TENSANPHAM">Email:</label>
                <input type="text" name="KH_EMAIL" placeholder="Email" class="form-control" value="{{$item->KH_EMAIL}}" required maxlength="20">
            </div>
            <div class=" mb-3 row">
                <label for="salary">Ngày sinh:</label>
                <input type="date" name="KH_NGAYSINH" placeholder="Ngày sinh" class="form-control " value="{{$item->KH_NGAYSINH}}" required>
            </div>
            <div class=" mb-3 row">
                <input type="hidden" name="KH_GIOITINH" class="form-control " value="{{$item->KH_GIOITINH}}">
            </div>      
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </div>
</form>
@endforeach
@endsection