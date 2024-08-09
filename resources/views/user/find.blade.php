<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>
    <style>
        .img{
          width: 100%;
          height: 100%;
          object-fit: cover;
          transition: all 0.25s;
        }
        .img:hover{
          transform: scale(1.2);
        }
      </style>
</head>
<body>
    @extends('layouts.header')
    @section('main')
        <h1 class="text-center text-md-center">Sản phẩm</h1>
        
        <div class="container">
            <div class="container-md container-fluid">
                <div class="mt-4">
                    <div class="row gx-5">
                    @foreach ($products as $item)
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center mb-3">
                            <img class="flex-shrink-0 img-fluid rounded img" src="/img/{{$item->SP_HINHANH}}" alt="" style="width: 100px;height: 100px">
                            <div class="w-100 d-flex flex-column text-start ps-4">
                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                    <span>{{$item->SP_TENSANPHAM}}</span>
                                    <span class="text-primary">{{number_format($item->SP_GIA,0,'.',',')}}đ</span>
                                </h5>
                                <small class="fst-italic">{{$item->SP_MOTA}}</small>
                                <form action="{{URL::to('/add-cart')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="number" name="num_product" value="1">
                                    <input type="hidden" name="product_id" value="{{$item->SP_MA}}">
                                    <button type="submit" class="btn btn-warning w-25" >+</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <br>
        </div>
            
       
    @endsection
</body>
</html>