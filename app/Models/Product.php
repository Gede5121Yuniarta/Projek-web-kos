<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product extends Model
{
    use HasFactory;
    protected $primaryKey = "id_product";
    // public $PrimaryKey = "id_product";
    // protected $table="products";
    protected $fillable = [
        'id_category','product_name','product_desc','product_rate','photo'
    ];
    public function categories(){
        return $this->belongsTo(Category::class,'id_category','id_category');
    }

    // static function getProduct(){
    //     $return=DB::table('products')
    //     ->join('categories','product.id_category','=','categories.id_category');
    //     return $return;
    // }
    public static function getProduct(){
        $return = DB::table('products')
        ->join('categories', 'products.id_category', '=', 'categories.id_category');
        return $return;
    }
    
}
