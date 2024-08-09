<?php
namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Post;
use App\Models\Type;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Staff;
class AdminController extends Controller
{
    public function index(){
        $this->middleware('admin');
        $news = DB::table('san_pham')->select('*')->join('loai', 'san_pham.L_MA','=','loai.L_MA');       
        $news = $news->get();
        $pageName = 'Danh mục sản phẩm';
        return view('Admin.index', compact('news', 'pageName'));

        // $news =Products::where('SP_MA', 1);
        // $news = $news->get();
        // echo $news;
        // return;
    }
    public function create()
    {
        $this->middleware('admin');
        $news = DB::table('loai')->select('*');
        
        $news = $news->get();
        
        $pageName = 'Thêm sản phẩm';   
        return view('Admin.create', compact('news', 'pageName'));
    }
    public function store(Request $request){
        $this->middleware('admin');
        $products = new Products;
        $products->L_MA = $request->L_MA;
        $products->SP_TENSANPHAM = $request->SP_TENSANPHAM;
        $products->SP_HINHANH = $request->SP_HINHANH;
        $products->SP_GIA = $request->SP_GIA;
        $products->SP_MOTA = $request->SP_MOTA;
        $products->save();
        return redirect('/admin');
    }

    public function editForm($id){
        $this->middleware('admin');
        $products = Products::all()->where('SP_MA',$id);
        return view('Admin.update',['products'=> $products]);
    }


    public function editProducts(Request $request,$id){    
        $this->middleware('admin');   
        $products = Products::where('SP_MA', $id)->first();
        $products->L_MA = $request->L_MA;
        $products->SP_TENSANPHAM = $request->SP_TENSANPHAM;
        if($products->SP_HINHANH = null) {
            $products->SP_HINHANH = $request->SP_HINHANH;
        }
        else $products->SP_HINHANH = $request->sp_image; 
        $products->SP_GIA = $request->SP_GIA;
        $products->SP_MOTA = $request->SP_MOTA;
        $products->save();
        return redirect('/admin');
    }
    public function destroy(Products $products)
    {
        $this->middleware('admin');
        //$products = Products::where('SP_MA', $id)->first();
        $products->delete();
        return redirect('/admin')->with('success','Dữ liệu xóa thành công.');
    }
    //Type
    public function type(){
        $this->middleware('admin');
        $type = DB::table('loai')->select('*');       
        $type = $type->get();        
        return view('Admin.type', compact('type'));
    }
    public function create_type()
    {
        $this->middleware('admin');
        return view('Admin.create_type');
    }
    public function store_type(Request $request){ 
        $this->middleware('admin');
        // $check = Type::all()->where('L_TENLOAI', $request->L_TENLOAI);
        // if($check){
        //     return redirect()->back()->with('error', 'Có lỗi xảy ra khi xử lý yêu cầu.');
        // }      
        $type = new Type;
        $type->L_TENLOAI = $request->L_TENLOAI;
        if(
        $request->validate([
            'L_TENLOAI' => 'required|unique:loai,L_TENLOAI',
            //Thêm các quy tắc validation khác tại đây
        ])){
        $type->save();
        session()->flash('success', 'Thêm loại sản phẩm thành công!');
        return redirect('/admin/create_type');}
        if(
            !$request->validate([
                'L_TENLOAI' => 'required|unique:loai,L_TENLOAI',
                //Thêm các quy tắc validation khác tại đây
            ])){
        session()->flash('error', 'Loại sản phẩm đã tồn tại');
        return redirect('/admin/create_type');
            }
    }

    public function editForm_type($id){
        $this->middleware('admin');
        $type = Type::all()->where('L_MA',$id);
        return view('Admin.update_type',['types'=> $type]);
    }


    public function editType(Request $request,$id){      
        $this->middleware('admin'); 
        $type = Type::where('L_MA', $id)->first();
        $type->L_TENLOAI = $request->L_TENLOAI;
        $type->save();
        return redirect('/admin/type');
    }
    // public function destroyType(Type $type)
    // {
    //     //$products = Products::where('SP_MA', $id)->first();
    //     $type->delete();
    //     return redirect('/admin/type')->with('success','Dữ liệu xóa thành công.');
    // }
    public function order(){
        $this->middleware('admin');
        $order = DB::table('don_dat_hang')->select('*');
        
        $order = $order->get();
        
        $pageName = 'Danh mục đơn đặt hàng';
        return view('Admin.order', compact('order', 'pageName'));
    }
    public function customer(){
        $this->middleware('admin');
        $customer = DB:: table('khach_hang')->select('*');
        $customer = $customer->get();
        $pageName = 'Danh mục khách hàng';
        return view('Admin.Customer', compact('customer', 'pageName'));
    }
    //Staff
    public function staff(){
        $this->middleware('admin');
        $staff = DB:: table('nhan_vien')->select('*');
        $staff = $staff->get();
        $pageName = 'Danh mục nhân viên';
        return view('Admin.Staff', compact('staff', 'pageName'));
    }
    public function create_staff()
    {
        $this->middleware('admin');
        $staff = DB::table('nhan_vien')->select('*');
        
        $staff = $staff->get();
        
        $pageName = 'Thêm sản phẩm';   
        return view('Admin.create_staff', compact('staff', 'pageName'));
    }
    public function store_staff(Request $request){
        $this->middleware('admin');
        $staff = new Staff;
        $staff->NV_HOTEN = $request->NV_HOTEN;
        $staff->NV_SDT = $request->NV_SDT;
        $staff->NV_DIAcHI = $request->NV_DIACHI;
        $staff->NV_GIOITINH = $request->NV_GIOITINH;
        $staff->NV_EMAIL = $request->NV_EMAIL;
        $staff->NV_NGAYSINH = $request->NV_NGAYSINH;
        $staff->NV_TAIKHOAN = $request->NV_TAIKHOAN;
        $staff->NV_MATKHAU = $request->NV_MATKHAU;
        $staff->save();
        return redirect('/admin/staff');
    }

    public function editForm_staff($id){
        $this->middleware('admin');
        $staff = Staff::all()->where('NV_MA',$id);
        return view('Admin.update_staff',['staff'=> $staff]);
    }


    public function editStaff(Request $request,$id){
        $this->middleware('admin');       
        $staff = Staff::where('NV_MA', $id)->first();
        $staff->NV_HOTEN = $request->NV_HOTEN;
        $staff->NV_SDT = $request->NV_SDT;
        $staff->NV_DIAcHI = $request->NV_DIACHI;
        $staff->NV_GIOITINH = $request->NV_GIOITINH;
        $staff->NV_EMAIL = $request->NV_EMAIL;
        $staff->NV_NGAYSINH = $request->NV_NGAYSINH;
        $staff->NV_TAIKHOAN = $request->NV_TAIKHOAN;
        $staff->NV_MATKHAU = $request->NV_MATKHAU;
        $staff->save();
        return redirect('/admin/staff');
    }
    public function destroy_staff(Staff $staff)
    {
        $this->middleware('admin');
        //$products = Products::where('SP_MA', $id)->first();
        $staff->delete();
        return redirect('/admin/staff')->with('success','Dữ liệu xóa thành công.');
    }
    public function statistics(){
        $count = Order::all()->count();
        $price = Order::all()->sum('DDH_TONGTIEN');
        $customer = Customer::all()->count();
        return view('admin.statistics',compact('count','price','customer'));
    }
    public function delete_order(Order $order){
        $this->middleware('admin');       
        $order->delete();
        return redirect('/admin/order');
    }

    // public function destroy(Products $products)
    // {
    //     $this->middleware('admin');
    //     //$products = Products::where('SP_MA', $id)->first();
    //     $products->delete();
    //     return redirect('/admin')->with('success','Dữ liệu xóa thành công.');
    // }
}
