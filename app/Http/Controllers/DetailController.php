<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class DetailController extends Controller
{
    
    // public function show(){
    //     return view('frontpage.detailpage');
    // }

//     public function detailPackage($id)
// {
//     $products = Product::where('id', $id)->get();
//     return view('frontpage.detailpage', compact('products'));
// }

// public function detailPackage($id_product)
// {
//     // Ganti 'id' dengan nama kolom yang sesuai di tabel produk Anda
//     $product = Product::where('id_product', $id_product)->first();

//     // Pastikan data produk ditemukan sebelum melewatkan ke tampilan
//     if ($product) {
//         return view('frontpage.detailpage', compact('product'));
//     } else {
//         // Tambahkan log atau tindakan lain jika produk tidak ditemukan
//         abort(404); // atau return view('errors.404'); sesuai dengan kebutuhan
//     }
// }


public function detailPackage($id_product)
{
    // Ganti 'id' dengan nama kolom yang sesuai di tabel produk Anda
    $product = Product::where('id_product', $id_product)->first();

    // Pastikan data produk ditemukan sebelum melewatkan ke tampilan
    if ($product) {
        return view('frontpage.detailpage', compact('product'));
    } else {
        // Tambahkan log atau tindakan lain jika produk tidak ditemukan
        return redirect()->route('home')->with('error', 'Produk tidak ditemukan.');
    }
}

}