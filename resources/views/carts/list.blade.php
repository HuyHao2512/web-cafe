@extends('layouts.header')
@extends('layouts.head')
@section('main')
    <form class="bg0 p-b-85" method="post">    
        @if (count($products) != 0)
            <div class="container">               
                <div class="row">
                    <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                        <div class="m-l-25 m-r--38 m-lr-0-xl">
                            <h2>Giỏ Hàng</h2>
                            <div class="table-responsive">                              
                                @php $total = 0; @endphp
                                <table class="table">
                                    <tbody>
                                        <thead>

                                            <tr class="">
                                                <th class="column-1">Sản Phẩm</th>
                                                <th class="column-2">Tên sản phẩm</th>
                                                <th class="column-3">Giá</th>
                                                <th class="column-4" style="text-align: center;">Số lượng</th>
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
                                                    <img src="/img/{{ $product->SP_HINHANH }}" alt="IMG" style="width: 100px;height: 100px">
                                                </div>
                                            </td>
                                            <td class="column-2" style="vertical-align: middle;">{{ $product->SP_TENSANPHAM }}</td>
                                            <td class="column-3" style="vertical-align: middle;">{{ number_format($price, 0, '', '.') }}</td>
                                            <td class="column-4">
                                                <div class="wrap-num-product flex-w m-l-auto m-r-0" style="margin-right:auto;">
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
                                            <td class="column-5" style="vertical-align: middle;">{{ number_format($priceEnd, 0, '', '.') }}</td>
                                            <td class="p-r-15 flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10"
                                             style="min-width:70px;height:40px;">
                                                <a href="/carts/delete/{{ $product->SP_MA }}" style="text-decoration: none; color: black">Xóa</a>
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
                            <h4 class="mtext-109 cl2 p-b-30" style="font-family:'Times New Roman', Times, serif">
                                Tổng Giỏ Hàng
                            </h4>

                            <div class="flex-w flex-t p-t-27 p-b-33">
                                <div class="size-208">
                                    <span class="mtext-101 cl2" style="font-family:'Times New Roman', Times, serif">
                                        Tổng :
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
                                        <span class="stext-112 cl8" style="font-family:'Times New Roman', Times, serif">
                                            Thông Tin Khách Hàng
                                        </span>
                                        <input type="hidden" value="{{Auth::id()}}" name="id">
                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="phone" placeholder="Số Điện Thoại" required style="font-family:'Times New Roman', Times, serif">
                                        </div>

                                        <div class="bor8 bg0 m-b-12" >
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="Địa Chỉ Giao Hàng" style="font-family:'Times New Roman', Times, serif">
                                        </div>

                                        <div class="bor8 bg0 m-b-12" >
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="email" placeholder="Email Liên Hệ" style="font-family:'Times New Roman', Times, serif">
                                        </div>

                                        <div class="bor8 bg0 m-b-12" style="font-family:'Times New Roman', Times, serif">
                                            <textarea class="cl8 plh3 size-111 p-lr-15" name="content"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @if (Auth::check())
                            <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                               Đặt Hàng
                            </button>
                            
                            @else
                                <a href="/login" class="btn tbn-primary">Đặt hàng</a>
                            
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </form>
    @else
    <div class="text-center">
        <img src="/img/cart-empty.png">
    </div>
    @endif
@endsection
