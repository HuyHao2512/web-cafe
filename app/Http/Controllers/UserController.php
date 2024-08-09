<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\SessionGuard;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function intro(){
        return view('user.intro');
    }
    public function job(){
        return view('user.job');
    }
    public function tch(){
        return view('user.tch');
    }
    public function cart(){
        return view('user.cart');
    }
    public function find(Request $request){
        $keyword = $request->input('keyword');
        if($request->input('keyword') == null){
            return redirect('/products');
        }
        else{
        $product = Products::where('SP_TENSANPHAM', 'like', '%' . $keyword . '%')->get();   
        return view('user.find', ['products' => $product]);
        }
    }
    public function sort_up(){
        $products = Products::orderBy('SP_GIA', 'asc')->paginate(10);      
        return view('user.price', ['products' => $products]);
    }
    public function sort_down(){
        $products = Products::orderBy('SP_GIA', 'desc')->paginate(10);      
        return view('user.price', ['products' => $products]);
    }
    public function donhang(){
        $id = Auth::id();
        $donhang = Order::all()->where('ID_KHACH_HANG', $id);
        return view('user.order', ['donhang'=> $donhang]);
    }
    public function profile(){
        $id = Auth::id();
        $user = Customer::all()->where('ID_KHACH_HANG', $id);
        return view('user.profile',['user'=> $user]);
    }
    public function edit_profile(Request $request, $id){      
        $user = Customer::where('ID_KHACH_HANG', $id)->first();
        $user->KH_HOTEN = $request->KH_HOTEN;
        $user->KH_NGAYSINH = $request->KH_NGAYSINH;
        $user->GH_MA = $request->GH_MA;
        $user->KH_GIOITINH = $request->KH_GIOITINH;
        $user->KH_SDT = $request->KH_SDT;
        $user->KH_EMAIL = $request->KH_EMAIL;
        $user->save();
        return redirect('/profile');
    }
}