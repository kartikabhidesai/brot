<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Model\Product;

class Product extends Model
{
    protected $table = 'product';
    public function addProduct($request){
        
       for($i = 0 ; $i < count($request->input('size')) ; $i++){
            $objProduct=  new Product();
            $objProduct->productcode = $request->input('productcode');
            $objProduct->productname = $request->input('productname');
            $objProduct->catagory = $request->input('category');
            $objProduct->subcatagory = $request->input('subcategory');
            $objProduct->size = $request->input('size')[$i];
            $objProduct->price = $request->input('price');
            $objProduct->description = $request->input('description');
            $objProduct->quantity = $request->input('quantity');
            $objProduct->created_at = date("Y-m-d h:i:s");
            $objProduct->updated_at = date("Y-m-d h:i:s");
            $objProduct->save();
       }
        return true;
    }
    public function getProduct(){
        
        $result = Product::select('category.categoryname','subcategory.subcategoryname','size.size','product.*')
                ->leftjoin('category','category.id','=','product.catagory')
                ->leftjoin('subcategory','subcategory.id','=','product.subcatagory')
                ->leftjoin('size','size.id','=','product.size')
                ->get();   
       return $result;
    }
    
}
