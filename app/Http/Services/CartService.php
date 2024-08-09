<?php


namespace App\Http\Services;


use App\Jobs\SendMail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Products;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Auth;

class CartService
{
    public function create($request)
    {
        $qty = (int)$request->input('num_product');
        $product_id = (int)$request->input('product_id');

        if ($qty <= 0 || $product_id <= 0) {
            Session::flash('error', 'Số lượng hoặc Sản phẩm không chính xác');
            return false;
        }

        $carts = Session::get('carts');
        if (is_null($carts)) {
            Session::put('carts', [
                $product_id => $qty
            ]);
            return true;
        }

        $exists = Arr::exists($carts, $product_id);
        if ($exists) {
            $carts[$product_id] = $carts[$product_id] + $qty;
            Session::put('carts', $carts);
            return true;
        }

        $carts[$product_id] = $qty;
        Session::put('carts', $carts);
        // dd($carts);
        return true;
    }

    public function getProduct()
    {
        $carts = Session::get('carts');
        if (is_null($carts)) return [];

        $productId = array_keys($carts);
        return Products::select('SP_MA', 'SP_TENSANPHAM', 'SP_GIA', 'SP_HINHANH')
            // ->where('active', 1)
            ->whereIn('SP_MA', $productId)
            ->get();
    }

    public function update($request)
    {
        Session::put('carts', $request->input('num_product'));

        return true;
    }

    public function remove($id)
    {
        $carts = Session::get('carts');
        unset($carts[$id]);

        Session::put('carts', $carts);
        return true;
    }

    public function addCart($request)
    {
        
        // dd($request);
        try {
            DB::beginTransaction();

            $carts = Session::get('carts');

            if (is_null($carts))
                return false;

                
            $productId = array_keys($carts);
            $products = Products::select('SP_MA', 'SP_TENSANPHAM', 'SP_GIA', 'SP_HINHANH')
                    // ->where('active', 1)
                    ->whereIn('SP_MA', $productId)
                    ->get();
            $total=0;
            foreach($products as $key => $product){
                    
                    $price =$product->SP_GIA;
                    $priceEnd = $price * $carts[$product->SP_MA];
                    $total += $priceEnd;
            }
            $data=[
                'ID_KHACH_HANG'=> Auth::id(),
                'DCGH'=>$request->input('address'),
                'NV_MA'=>mt_rand(1,10),
                'DDH_PHIGIAOHANG'=>40000,
                'DDH_NGAYDAT' =>date_create("now"),
                'DDH_TONGTIEN'=>$total
            ];
            Order::insert($data);
            DB::commit();
            Session::flash('success', 'Đặt Hàng Thành Công');

            Session::forget('carts');
        } catch (\Exception $err) {
            DB::rollBack();
            Session::flash('error', 'Đặt Hàng Lỗi, Vui lòng thử lại sau');
            return false;
        }

        return true;
    }

   
}