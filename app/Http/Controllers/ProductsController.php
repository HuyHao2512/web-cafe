<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Post;

class ProductsController extends Controller
{
    public function index(){
        $products = DB::table('san_pham')->select('*');
        //->simplePaginate(4);        
        // $products = $products->get();
        $products = Products::paginate(10); 
        return view('Products.index',['products' => $products]);

        // $news =Products::where('SP_MA', 1);
        // $news = $news->get()
        // echo $news;
        // return;
    }
    
    
}
