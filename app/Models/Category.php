<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public $PrimaryKey = "id_category";
    // protected $table="categories";
    protected $fillable = [
        'category_name'
    ];
    public function products(){
        return $this->hasMany(Product::class,'id_category','id_category');
    }

}
