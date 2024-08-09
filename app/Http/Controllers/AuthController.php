<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Customer;
use App\Models\Cart;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $req){
        $user = User::all()->where('email',$req->email);
        $data = [
            'email' => $req->email,
            'password' => $req->password
        ];
        if(auth::attempt($data)){
            session()->flash('success', 'Đăng nhập thành công!');
            return redirect('/');
        }
        return redirect('/login')->with('error', 'Email hoặc mật khẩu không đúng, vui lòng thử lại!');
        // if (Auth::attempt(['email' => $email, 'password' => $password], true)) {
        //     // Đăng nhập thành công, có thể ghi nhớ đăng nhập
        // }
        
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function Register(){
        return view('auth.register');
    }
    public function create(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/create_info');
    }
    public function create_info(){
        return view('auth.create_info');
    }
    public function create_cus(Request $request){
        $cart = new Cart;
        $cart->save();
        $user = new Customer;
        
        $user->GH_MA = $cart->GH_MA;
        $user->KH_HOTEN = $request->name;
        $user->KH_SDT = $request->phone;
        if($request->gender == 'Nam'){
            $user->KH_GIOITINH = '1';}
        else{
            $user->KH_GIOITINH = '0';
        }
        $user->KH_EMAIL = $request->email;
        $user->KH_NGAYSINH = $request->birthday;
        $user->save();
        return redirect('/');
    }
}
