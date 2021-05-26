<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function aboutus(){
     return view ('about-us');
 }
 public function contact(){
    return view ('contact');
}
 public function services(){
    return view ('services');
}
 public function gallery(){
    return view ('gallery');
}  
public function profile(){
    return view ('profile');
}  
public function profile1(){
    return view ('profile1');
}  
public function servicesCleaning(){
    return view ('servicesCleaning');
} 
public function authUserForgotPassword(){
    return view ('authUserForgotPassword');
} 
public function searchProduct(){
    return view ('searchProduct');
} 
public function productsFilterAllFree(){
    return view ('productsFilterAllFree');
}
public function members(){
    return view ('members');
}
public function print(){
    return view ('print');
}
public function orderCheckout(){
    return view ('orderCheckout');
}
public function facebookAccountsMembersLogin(){
    return view ('facebookAccountsMembersLogin');
}
}






