<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product_size extends Model
{
    protected $table = 'product_size';
    public function getproductSizeDetails($id) {
        
        $result = Size::select('size.categoryid', 'size.subcategoryid', 'size.size', 'size.id','product_size.quantity')
                ->leftjoin('product_size','product_size.size','=','size.id')
                ->where('subcategoryid', $id)
                ->get();
        
        return $result;
    }
    public function getproductSizeDetailsNew($id) {
        
        $result = Product_size::select('size.categoryid', 'size.subcategoryid', 'size.size', 'size.id','product_size.quantity')
                ->leftjoin('size','size.id','=','product_size.size')
                ->where('product_size.productid', $id)
                ->get();
        return $result;
    }
}
