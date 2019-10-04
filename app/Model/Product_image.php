<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product_image extends Model
{
    
    protected $table = 'product_image';
    public function getProductimage($id){
        
        $result = Product_image::select('image','id','productid')
                    ->where('productid',$id)
                    ->get();
        return $result;
    }
}
