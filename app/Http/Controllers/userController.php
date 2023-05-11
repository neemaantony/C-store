<?php

namespace App\Http\Controllers;
use App\Models\register;
use App\Models\product;
use App\Models\cart;

use Illuminate\Http\Request;

class userController extends Controller
{
   public function index()
   {
    return view('user.index');
   }
   public function userloginhome()
   {
    return view('user.userloginhome');
   }
   public function usereditprofile()
   {  
      $id=session('login');
      //echo $id;
      //exit();
      $data['res']=register::where('id',$id)->get();
      //print_r($data);
      //exit();
      return view('user.usereditprofile',$data);
   }
   public function viewproduct(Request $res)
   {
      $data['res']=product::get();
      //print_r($data);
     // exit();
    return view('user.viewproduct',$data);
    

   }
   public function vieworder()
   {
    return view('user.vieworder');
   }
   public function viewpayment()
   {
    return view('user.viewpayment');
   }
   public function viewcart()
   {
    return view('user.viewcart');
   }
   public function logout()
   {
    return view('user.logout');
   }
   public function registeraction(Request $res,$id)
   {
      $name=$res->input('name');
      $place=$res->input('place');
      $address=$res->input('address');
      $username=$res->input('username');
      $password=$res->input('password');
      $data=[
         'name'=>$name,
         'place'=>$place,
         'address'=>$address,
         'username'=>$username,
         'password'=>$password
      ];
      register::where('id',$id)->update($data);
      return redirect('/usereditprofile');

   }
   public function addcart($id)
   {
      $userid=session('login');
      $price=product::where('id',$id)->value('price');
      $data=[
         'productid'=>$id,
         'price'=>$price,
         'userid'=>$userid,
         'quantity'=>'1'
      ];
      cart::insert($data);
      return redirect('/viewcart');
   }



}
