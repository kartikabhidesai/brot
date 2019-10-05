<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Model\Product;
use App\Model\Product_image;
use App\Model\Product_size;

class Product extends Model {

    protected $table = 'product';

    public function addProduct($request) {
//        $findProductname = Product::where('productname', $request->input('productname'))->first();
//        
//        if (!empty($findProductname)) {
//            $return['status'] = 'error';
//            $return['message'] = 'this productname is already exists';
//        } else {
           
            $alradyExist = "";
            $count = 0;
            for ($i = 0; $i < count($request->input('size')); $i++) {
                $sub = $request->input('size')[$i];
                $findSize = Product::select('*')
                        ->join('product_size','product_size.productid','=','product.id')
                        ->join('size','size.id','=','product_size.size')
                        ->where('product.catagory', $request->input('category'))
                        ->where('product.subcatagory', $request->input('subcategory'))
                        ->where('product_size.size', $request->input('size')[$i])
                        ->get()
                        ->toArray();
                 
                if (!empty($findSize)) {
                    $count++;
                    $alradyExist .= $findSize[0]['size'] . ', ';
                    $result = true;
                } else {
                    $name = '';
                    if ($request->file()) {
                        for ($i = 0; $i < count($request->file('image')); $i++) {

                            $image = $request->file('image')[$i];
                            $name = time() . $i . '.' . $image->getClientOriginalExtension();
                            $destinationPath = public_path('/uploads/product/');
                            $image->move($destinationPath, $name);
                            $objProduct = new Product_image();
                            $objProduct->productid = $request->input('productcode');
                            $objProduct->image = $name;
                            $result = $objProduct->save();
                        }
                    }
                    $objProduct = new Product();
                    $objProduct->productcode = $request->input('productcode');
                    $objProduct->productname = $request->input('productname');
                    $objProduct->catagory = $request->input('category');
                    $objProduct->subcatagory = $request->input('subcategory');
                    $objProduct->price = $request->input('price');
                    $objProduct->description = $request->input('description');
                    $objProduct->created_at = date("Y-m-d h:i:s");
                    $objProduct->updated_at = date("Y-m-d h:i:s");
                    $result = $objProduct->save();
                    $lastid = $objProduct->id;
                    for ($i = 0; $i < count($request->input('size')); $i++) {

                        $objProductsize = new Product_size();
                        $objProductsize->productid = $lastid;
                        $objProductsize->size = $request->input('size')[$i];
                        $objProductsize->quantity = $request->input('quantity')[$i];
                        $objProductsize->created_at = date("Y-m-d h:i:s");
                        $objProductsize->updated_at = date("Y-m-d h:i:s");
                        $result = $objProductsize->save();
                    }
                }
            }
            if ($result) {
                if ($count == count($request->input('size'))) {
                    $return['status'] = 'error';
                    $return['message'] = 'this ' . $alradyExist . '  size is already exists';
                } else {
                    $return['status'] = 'success';
                    $return['message'] = ($alradyExist == '') ? 'size created successfully.' : 'size created successfully But ' . $alradyExist . ' is already exist in our system';
                    $return['redirect'] = route('Size-list');
                }
            }
            return $return;
//        }
//        return $return;
    }

    public function getProductdetails($id) {

        $result = Product::select('*')
                ->where('id', $id)
                ->get();
        return $result;
    }

    public function getProduct() {
        $result = Product::select('category.categoryname', 'subcategory.subcategoryname', 'product_image.image', 'product.price', 'product.description', 'product_size.quantity', 'product.productcode', 'product_size.size', 'product.productname', 'product.id')
                ->leftjoin('category', 'category.id', '=', 'product.catagory')
                ->leftjoin('subcategory', 'subcategory.id', '=', 'product.subcatagory')
                ->leftjoin('product_size', 'product_size.size', '=', 'product.id')
                ->leftjoin('product_image', 'product_image.productid', '=', 'product.productcode')
                ->groupBy('product_image.productid')
                ->get();
        return $result;
    }

    public function deleteProduct($data) {

        $result = Product::find($data['id'])->delete();
        return $result;
    }

}
