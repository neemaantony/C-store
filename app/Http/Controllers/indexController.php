<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use App\models\register;
use App\Models\adminlogin;
use App\Models\product;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $data['res']=product::get();
        return view('index',$data);
    }
    public function register(){
        return view('register');
    }
    public function userlogin()
    {
        return view('userlogin');
    }
    public function adminlogin()
    {
        return view('adminlogin');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function registeraction(Request $res)
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
    register::insert($data);
    return redirect('/register');
    

    }
    public function loginaction(Request $res)
    {
        $username=$res->input('username');
        $password=$res->input('password');
        $data=register::where('username',$username)->where('password',$password)->first();
        if(isset($data))
        {
            $res->session()->put(array('login'=>$data->id));
            return redirect('/userloginhome');
        }
        else{
            return redirect('/userlogin');
        }
    }
    public function adminaction(Request $res)
    {
        $username=$res->input('username');
        $password=$res->input('password');
        $data=adminlogin::where('username',$username)->where('password',$password)->first();
        if(isset($data))
        {
            $res->session()->put(array('adminlogin'=>$data->id));
            return redirect('/admin');
        }
        else{
            return redirect('/adminlogin');
        }
    }

}
