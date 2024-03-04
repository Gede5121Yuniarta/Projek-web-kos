<?php

namespace App\Http\Controllers\API;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Product::getProduct()->paginate(3);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi=$request->validate([
            "id_product"=> "required|numeric",
            "product_name"=> "required",
            "product_desc"=> "required",
            "id_category"=> "required",
            "photo"=> "required|file|mimes:png,jpg,jpeg",
            "product_rate"=>"numeric"
        ]);
        try{
            $fileName=time().$request->file('photo')->getClientOriginalName();
            $path=$request->file('photo')->storeAs('uploads/products',$fileName);
            $validasi['photo']=$path;
            $response=Product::create($validasi);
            return response()->json([
                'success'=> true,
                'message'=> 'success',
                'data'=>$response
            ]); 
        } catch (\Exception $e) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
                ]);
        }
    }
    public function category(){
        $data=Category::all();
        return response()->json($data);
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
        $data=Product::where('id_product',$id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi=$request->validate([
            "id_product"=> "required|numeric",
            "product_name"=> "required",
            "product_desc"=> "required",
            "id_category"=> "required",
            "photo"=> "",
            "product_rate"=>"numeric"
        ]);
        try{
            if($request->file('photo')){
                $fileName=time().$request->file('photo')->getClientOriginalName();
                $path=$request->file('photo')->storeAs('uploads/products',$fileName);
                $validasi['photo']=$path;
            }
            $response=Product::where('id_product',$id);
            $response->update($validasi);
            return response()->json([
                'success'=> true,
                'message'=> 'success',
                'data'=>$response
            ]); 
        } catch (\Exception $e) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
        $product = Product::where('id_product',$id);
        $product->delete();
        return response()->json([
            'success'=>true,
            'message'=>'Success'
        ]);
        }catch (\Exception $e) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
        }
    }
}