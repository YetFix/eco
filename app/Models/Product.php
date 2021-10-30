<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=
    ['title','status','slug','summary','photo','description','stock',
    'price','offer_price','discount','brand_id','category_id','child_cat_id','vendor_id',
    'conditions','size'
];


    public static function getProductByCart($id){
        return Product::where('id',$id)->get()->toArray();
    }
}