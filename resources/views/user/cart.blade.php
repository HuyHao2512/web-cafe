<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giỏ hàng</title>
    <link href="/https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/css-cart.css">
    <link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>
</head>
<body>
    @extends('layouts.header')
    @section('main')       
    <div class="rounded container-fluid px-3 px-lg-0 container-lg mt-5 p-3 border-1 border-black border imgOpacity">
        <h2 class="text-dark px-3 text-center">Giỏ Hàng</h2>
        <form class="bg0 p-t-130 p-b-85" method="post">
          @include('admin.alert')
  
          @if (count($products) != 0)
              <div class="container">
                  <div class="row">
                      <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                          <div class="m-l-25 m-r--38 m-lr-0-xl">
                              <div class="table-responsive">
                                  @php $total = 0; @endphp
                                  <table class="table">
                                      <tbody>
                                          <thead>
  
                                              <tr class="">
                                                  <th class="column-1">Sản Phẩm</th>
                                                  <th class="column-2">Tên sản phẩm</th>
                                                  <th class="column-3">Giá</th>
                                                  <th class="column-4">Số lượng</th>
                                                  <th class="column-5">Tổng</th>
                                                  <th class="column-6">&nbsp;</th>
                                              </tr>
                                          </thead>
  
                                      @foreach($products as $key => $product)
                                          @php
                                              $price =$product->SP_GIA;
                                              $priceEnd = $price * $carts[$product->SP_MA];
                                              $total += $priceEnd;
                                          @endphp
                                          <tr class="table_row">
                                              <td class="column-1">
                                                  <div class="">
                                                      <img src="{{ $product->SP_HINHANH }}" alt="IMG">
                                                  </div>
                                              </td>
                                              <td class="column-2">{{ $product->SP_TENSANPHAM }}</td>
                                              <td class="column-3">{{ number_format($price, 0, '', '.') }}</td>
                                              <td class="column-4">
                                                  <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                      <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                          <i class="fs-16 zmdi zmdi-minus"></i>
                                                      </div>
  
                                                      <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                             name="num_product[{{ $product->SP_MA }}]" value="{{ $carts[$product->SP_MA] }}">
  
                                                      <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                          <i class="fs-16 zmdi zmdi-plus"></i>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td class="column-5">{{ number_format($priceEnd, 0, '', '.') }}</td>
                                              <td class="p-r-15">
                                                  <a href="/carts/delete/{{ $product->SP_MA }}">Xóa</a>
                                              </td>
                                          </tr>
                                      @endforeach
                                      </tbody>
                                  </table>
                              </div>
  
                              <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                  
  
                                  <input type="submit" value="Update Cart" formaction="/update-cart"
                                      class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                  @csrf
                              </div>
                          </div>
                      </div>
  
                      <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                          <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                              <h4 class="mtext-109 cl2 p-b-30">
                                  Cart Totals
                              </h4>
  
                              <div class="flex-w flex-t p-t-27 p-b-33">
                                  <div class="size-208">
                                      <span class="mtext-101 cl2">
                                          Total:
                                      </span>
                                  </div>
  
                                  <div class="size-209 p-t-1">
                                      <span class="mtext-110 cl2">
                                          {{ number_format($total, 0, '', '.') }}
                                      </span>
                                  </div>
                              </div>
  
                              <div class="flex-w flex-t bor12 p-t-15 p-b-30">
  
                                  <div class="size-100 p-r-18 p-r-0-sm w-full-ssm">
  
                                      <div class="p-t-15">
                                          <span class="stext-112 cl8">
                                              Thông Tin Khách Hàng
                                          </span>
  
                                          <div class="bor8 bg0 m-b-12">
                                              <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="name" placeholder="Tên khách Hàng" required>
                                          </div>
  
                                          <div class="bor8 bg0 m-b-12">
                                              <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="phone" placeholder="Số Điện Thoại" required>
                                          </div>
  
                                          <div class="bor8 bg0 m-b-12">
                                              <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="Địa Chỉ Giao Hàng">
                                          </div>
  
                                          <div class="bor8 bg0 m-b-12">
                                              <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="email" placeholder="Email Liên Hệ">
                                          </div>
  
                                          <div class="bor8 bg0 m-b-12">
                                              <textarea class="cl8 plh3 size-111 p-lr-15" name="content"></textarea>
                                          </div>
  
                                      </div>
                                  </div>
                              </div>
  
                              <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                 Đặt Hàng
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
      </form>
      @else
          <div class="text-center"><h2>Giỏ hàng trống</h2></div>
      @endif
        <div class="text-end pe-3 book-btn-group">
          <button class="btn btn-success book-confirm ">Thanh toán tất cả</button>
          <button class="btn btn-danger book-removeAll">Xóa tất cả</button>
        </div>
      </div>
      @endsection
      <script src="/https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      
</body>
</html>