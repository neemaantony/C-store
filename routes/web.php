<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great
*/

//index
Route::get('/',[indexController::class,'index']);
Route::get('/register',[indexController::class,'register']);
Route::get('/userlogin',[indexController::class,'userlogin']);
Route::get('/adminlogin',[indexController::class,'adminlogin']);
Route::get('/about',[indexController::class,'about']);
Route::get('/contact',[indexController::class,'contact']);
Route::post('/registeraction',[indexController::class,'registeraction']);
Route::post('/loginaction',[indexController::class,'loginaction']);
Route::post('/adminaction',[indexController::class,'adminaction']);





//admin
Route::get('/admin',[adminController::class,'index']);
Route::get('/viewuser',[adminController::class,'viewuser']);
Route::get('/vieworder',[adminController::class,'vieworder']);
Route::get('/addproduct',[adminController::class,'addproduct']);

Route::get('/editprofile',[adminController::class,'editprofile']);
Route::get('/payments',[adminController::class,'payments']);
Route::get('/addabout',[adminController::class,'addabout']);
Route::get('/viewabout',[adminController::class,'viewabout']);
Route::get('/logout',[adminController::class,'logout']);
Route::post('/addproducts',[adminController::class,'addproducts']);
Route::post('/about',[adminController::class,'about']);
Route::get('/viewproduct',[adminController::class,'product']);
Route::get('/edit/{id}',[adminController::class,'edit']);
Route::post('/editaction/{id}',[adminController::class,'editaction']);
Route::get('/delete/{id}',[adminController::class,'delete']);
Route::get('/delete1/{id}',[adminController::class,'delete1']);
Route::get('/edit1/{id}',[adminController::class,'edit1']);
Route::post('/aboutaction/{id}',[adminController::class,'aboutaction']);
//user
Route::get('/user',[userController::class,'index']);
Route::get('/userloginhome',[userController::class,'userloginhome']);
Route::get('/usereditprofile',[userController::class,'usereditprofile']);
Route::get('/user/viewproduct',[userController::class,'viewproduct']);
Route::get('/vieworder',[userController::class,'vieworder']);
Route::get('/viewpayment',[userController::class,'viewpayment']);
Route::get('/viewcart',[userController::class,'viewcart']);
Route::get('/logout',[userController::class,'logout']);
Route::post('/registeraction/{id}',[userController::class,'registeraction']);
Route::get('/addcart/{id}',[userController::class,'addcart']);







