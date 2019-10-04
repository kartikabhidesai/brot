<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Model\Product;
use App\Model\Product_image;

class Product extends Model
{
    protected $table = 'product';
    
    public function addProduct($request){
        $findProductname = Product::where('productname', $request->input('productname'))->first();
        
        if(!empty($findProductname)) {
            return false;
        }else{
            $name='';
            if($request->file()){
                for($i = 0 ; $i < count($request->file('image')) ; $i++){

                    $image = $request->file('image')[$i];
                    $name = time().$i.'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/product/');
                    $image->move($destinationPath, $name);    
                    $objProduct=  new Product_image();
                    $objProduct->productid = $request->input('productcode');
                    $objProduct->image = $name;
                    $objProduct->save();
                }
            }
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
        }
         return true;
    }
    public function getProductdetails($id){
        
        $result = Product::select('*')
                ->where('id',$id)
                ->get();
        return $result;
    }
    public function getProduct(){
        $result = Product::select('category.categoryname','subcategory.subcategoryname','size.size','product_image.image','product.price','product.description','product.quantity','product.productcode','product.productname','product.id')
                ->leftjoin('category','category.id','=','product.catagory')
                ->leftjoin('subcategory','subcategory.id','=','product.subcatagory')
                ->leftjoin('size','size.id','=','product.size')
                ->leftjoin('product_image','product_image.productid','=','product.productcode')
                ->groupBy('product_image.productid')
                ->get();
       return $result;
    }
    public function deleteProduct($data){
        
        $result = Product::find($data['id'])->delete();
    	return $result;
    }
    
}
