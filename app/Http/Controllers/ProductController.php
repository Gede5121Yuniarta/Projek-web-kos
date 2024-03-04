<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Landing Page';

        $products =new Product;
        if(isset($_GET['s'])){
            $s=$_GET['s'];
            $products=$products->where('product_name','like',"%$s%");
        }
        if(isset($_GET['id_category'])&&$_GET['id_category']!=''){
            $products=$products->where('id_category',$_GET['id_category']);
        }
        // ::all();
        $products=$products->paginate(3);
        // $products=$products->get();

        // $products = Product::all();
        $categories = Category::all();
        // dd($products);
        return view('backpage.daftarproduct', compact('title', 'products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Page';
        $categories = Category::all();
        // dd($products);
        return view('backpage.inputproduct', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required'=> 'Kolom :attribute harus lengkap',
            'numeric'=> 'Kolom :attribute harus angka',
            'file'=> 'Perhatikan format dan ukuran file',
        ];

        $validasi=$request->validate([
            "id_product"=> "numeric",
            "product_name"=> "required",
            "product_desc"=> "required",
            "id_category"=> "required",
            "photo"=> "required|mimes:png,jpg,jpeg",
            "product_rate"=>"numeric"
            ],$messages);
        try{
            // DB::beginTransaction();
            $fileName=time().$request->file('photo')->getClientOriginalName();
            $path=$request->file('photo')->storeAs('photos',$fileName);
            $validasi['photo']=$path;
            $response=Product::create($validasi);
            // DB::commit();
            //message
            return redirect('product'); 
        }catch(\Exception $e){
            echo $e->getMessage();
        }
        // $fileName=time().$request->file('photo')->getClientOriginalName();
        // $path=$request->file('photo')->storeAs('photos',$fileName);
        // $validasi['photo']=$path;
        // Tiket::create($validasi);
        // return redirect('/package')->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Create Page';
        $categories = Category::all();
        $product = Product::where('id_product',$id)->first();
        // dd($product);
        return view('backpage.inputproduct', compact('title', 'categories','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required'=> 'Kolom :attribute harus lengkap',
            'numeric'=> 'Kolom :attribute harus angka',
            'file'=> 'Perhatikan format dan ukuran file',
        ];

        $validasi=$request->validate([
            "id_product"=> "numeric",
            "product_name"=> "required",
            "product_desc"=> "required",
            "id_category"=> "required",
            "photo"=> " ",
            "product_rate"=>"numeric"
            ],$messages);
        try{
            // DB::beginTransaction();
            if($request->file('photo')){
                $fileName=time().$request->file('photo')->getClientOriginalName();
                $path=$request->file('photo')->storeAs('photos',$fileName);
                $validasi['photo']=$path;
            }    
            $response=Product::where('id_product',$id)->update($validasi);
            // DB::commit();
            //message
            return redirect('product'); 
        }catch(\Exception $e){
            echo $e->getMessage();
        }
        // $fileName=time().$request->file('photo')->getClientOriginalName();
        // $path=$request->file('photo')->storeAs('photos',$fileName);
        // $validasi['photo']=$path;
        // Tiket::create($validasi);
        // return redirect('/package')->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            // $product = Product::find($id);
            $product = Product::where('id_product',$id);
            $product->delete();
            return redirect('product');
        }catch (\Throwable $e){
            echo $e->getMessage();
        }
    }
}