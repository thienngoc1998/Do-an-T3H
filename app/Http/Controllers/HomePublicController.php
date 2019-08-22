<?php

namespace App\Http\Controllers;

use App\Products;
use App\User;
use Illuminate\Http\Request;

class HomePublicController extends Controller
{
    public function index(){
        $productFeatured= Products::where('hot',1)->get();
        $productSale=Products::where('promotion_pr','<>','0')->get();
        $productNew=Products::where('status','mới')->get();
        $productApple=Products::where('producer','Apple')->get();
        $productSamSung=Products::where('producer','samsung')->get();
        $productXiaomi=Products::where('producer','xiaomi')->get();
        return view('Home.layouts.home',compact('productFeatured','productSale','productNew','productApple','productSamSung','productXiaomi'));
    }
    public function getFormLoginAndRegister(){
        return view('Home.layouts.loginvsregister');
    }
    public function registerForm(Request $request)
    {
      $user=User::create($request->all());
      dd($user);
    }
}
