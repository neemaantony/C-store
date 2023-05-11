<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\addabout;
use App\Models\register;

use Illuminate\Http\Request;

class adminController extends Controller
{
   public function index()
   {
    return view('admin.index');
   }
   public function viewuser()
   {

      $data['res']=register::get();
      return view('admin.viewuser',$data);
   }
   public function vieworder()
   {
      return view('admin.vieworder');
   }
   public function addproduct()
   {
      return view('admin.addproduct');
   }
   public function product()
   {
      $data['res']=product::get();
      return view('admin.viewproduct',$data);
   }
   public function editprofile()
   {
      return view('admin.editprofile');
   }
   public function payments()
   {
      return view('admin.payments');
   }
   public function addabout()
   {
      return view('admin.addabout');
   }
   public function viewabout()
   { $data['res']=addabout::get();
      return view('admin.viewabout',$data);
   }
      
   
   public function logout()
   {
      return view('admin.logout');
   }
   public function addproducts(Request $res)
{$name=$res->input('name');
   $product=$res->input('product');
   $companyname=$res->input('company');
   $price=$res->input('price');
   $description=$res->input('description');
   $image=$res->file('image');
   $filename=$image->getClientOriginalName();
   $image->move(public_path().'/image/',$filename);
   $data=[
      'name'=>$name,
      'product'=>$product,
      'companyname'=>$companyname,
      'price'=>$price,
      'description'=>$description,
      'image'=>$filename

   ];
   product::insert($data);
   return redirect('/addproduct');

}
public function about(Request $res)

{
   $subject=$res->input('subject');
   $description=$res->input('description');
   $data=[
      'subject'=>$subject,
      'description'=>$description
   ];
   addabout::insert($data);
   return redirect('/addabout');


}
public function edit($id)
{
   $data['res']=product::where('id',$id)->get();
   return view('admin.edit',$data);
}
public function editaction(Request $res,$id)
{
   $name=$res->input('name');
   $product=$res->input('product');
   $companyname=$res->input('company');
   $price=$res->input('price');
   $description=$res->input('description');
   $image=$res->file('image');
  if($image=="")
  {
   $data=[
      'name'=>$name,
      'product'=>$product,
      'companyname'=>$companyname,
      'price'=>$price,
      'description'=>$description
   ];
  }
  else
  {
   $filename=$image->getClientOriginalName();
   $image->move(public_path().'/image/',$filename);
   $data=[
      'name'=>$name,
      'product'=>$product,
      'companyname'=>$companyname,
      'price'=>$price,
      'description'=>$description,
      'image'=>$filename

   ];
}
   product::where('id',$id)->update($data);
   return redirect('/viewproduct');

}
public function delete($id)
{
   product::where('id',$id)->delete();
   return redirect('/viewproduct');
}
public function delete1($id)
{
   addabout::where ('id',$id)->delete();
   return redirect(('/viewabout'));
}
public function edit1($id)
{
   $data['res']=addabout::where('id',$id)->get();
   return view('admin.edit1',$data);
}
public function aboutaction(Request $res,$id)

{
   $subject=$res->input('subject');
   $description=$res->input('description');
   $data=[
      'subject'=>$subject,
      'description'=>$description
   ];
   addabout::where('id',$id)->update($data);
   return redirect('/viewabout');


}
}






