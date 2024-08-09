<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use PharIo\Manifest\Author;
use PharIo\Manifest\AuthorCollection;


//Admin
Route::get('/admin/statistics', [AdminController::class,'statistics'])->middleware('admin');
//product
Route::get('/admin', [AdminController::class,'index'])->middleware('admin');
Route::get('/admin/create', [AdminController::class,'create'])->middleware('admin');
Route::post('/admin/store', [AdminController::class,'store'])->middleware('admin');
Route::get('/admin/edit/{id}',[AdminController::class,'editForm'])->middleware('admin');
Route::post('/admin/edit/{id}',[AdminController::class,'editProducts'])->middleware('admin');
Route::delete('/admin/delete/{products}', [AdminController::class,'destroy'])->middleware('admin');
//type
Route::get('/admin/type',[AdminController::class,'type'])->middleware('admin');
Route::get('/admin/create_type', [AdminController::class,'create_type'])->middleware('admin');
Route::post('/admin/store_type', [AdminController::class,'store_type'])->middleware('admin');
Route::get('/admin/edit_type/{id}',[AdminController::class,'editForm_type'])->middleware('admin');
Route::post('/admin/edit_type/{id}',[AdminController::class,'editType'])->middleware('admin');
//Route::delete('/admin/delete/{type}', [AdminController::class,'destroy_type']);
//order
Route::get('/admin/order',[AdminController::class,'order'])->middleware('admin');
Route::delete('/admin/delete_order/{order}',[AdminController::class,'delete_order'])->middleware('admin');
//customer
Route::get('/admin/customer',[AdminController::class,'customer'])->middleware('admin');
//staff
Route::get('/admin/staff',[AdminController::class,'staff'])->middleware('admin');
Route::get('/admin/create_staff', [AdminController::class,'create_staff'])->middleware('admin');
Route::post('/admin/store_staff', [AdminController::class,'store_staff'])->middleware('admin');
Route::get('/admin/edit_staff/{id}',[AdminController::class,'editForm_staff'])->middleware('admin');
Route::post('/admin/edit_staff/{id}',[AdminController::class,'editStaff'])->middleware('admin');
Route::delete('/admin/delete_staff/{staff}', [AdminController::class,'destroy_staff'])->middleware('admin');
//Product
Route::get('/products', [ProductsController::class,'index']);

//Auth
Route::get('/login',[AuthController::class,'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'create']);
Route::post('/logout', [AuthController::class,'logout']);
Route::get('/create_info', [AuthController::class,'create_info']);
Route::post('/create_cus', [AuthController::class,'create_cus']);

//User
Route::get('/intro',[UserController::class,'intro']);
Route::get('/', [UserController::class,'index']);
Route::get('/job',[UserController::class,'job']);
Route::get('/tch',[UserController::class,'tch']);
Route::get('/cart',[UserController::class,'cart']);
Route::get('/find',[UserController::class,'find']);
Route::get('/price_up',[UserController::class,'sort_up']);
Route::get('/price_down',[UserController::class,'sort_down']);
Route::get('/donhang',[UserController::class,'donhang']);
Route::get('/profile',[UserController::class,'profile']);
Route::post('/edit_profile/{id}',[UserController::class,'edit_profile']);
Route::post('/add-cart', [CartController::class, 'index']);
Route::get('/carts', [CartController::class, 'show']);
Route::post('/update-cart', [CartController::class, 'update']);
Route::get('/carts/delete/{id}', [CartController::class, 'remove']);
Route::post('/carts', [CartController::class, 'addCart']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


