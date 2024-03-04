<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    //
    // berubah karna modul
    // public function index(){
    //     $title="landing page";
    //     echo $title;
    // }

    // function index(){
    //     //memanggil view landing page pada folder frontpage
    //     //disertai dengan variable title yang dapat ditampilkan pada layout return view('frontpage.landingpage', ['title' => "Landing Page"]);
    //     return view('frontpage.landingpage', ['title' => "Landing Page"]);
    // }

    // public function detailPackage(){
    //     return view('frontpage.detail');
    // }
    
    // public function index(){
    //     return view('frontpage.landingpage');
    // }

    public function index(){
        $title = 'Landing Page';
        // $products=[
        //     (object)[
        //         'product_code'=> '$vp1',
        //         'product_name'=> 'Vape a',
        //         'product_desc'=> 'Vape electrik',
        //         'product_rate'=> '30.000',
        //         'photo'=> '/build/assets/vape.jpg',      
        //     ],

        //     (object)[
        //         'product_code'=> '$lk1',
        //         'product_name'=> 'Likuit a',
        //         'product_desc'=> 'Cairan vape',
        //         'product_rate'=> '15.000',
        //         'photo'=> '/build/assets/lukuit.jpg',      
        //     ],

        //     (object)[
        //         'product_code'=> '$vp2',
        //         'product_name'=> 'Vape b',
        //         'product_desc'=> 'Vape electrik',
        //         'product_rate'=> '90.000',
        //         'photo'=> '/build/assets/vape.jpg',      
        //     ],
        // ];
    $products = Product::all();
    return view('frontpage.landingpage',compact('title','products'));
    }

    public function detailPackage($id){
        return view ('frontpage.detailpage');
    }

    
}
