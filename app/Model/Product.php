<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use File;
use App\Model\Product;
use App\Model\Product_image;
use App\Model\Product_size;

class Product extends Model {

    protected $table = 'product';

    public function addProduct($request) {
        $findProductname = Product::where('productname', $request->input('productname'))->first();

        if (!empty($findProductname)) {
            $return['status'] = 'error';
            $return['message'] = 'this productname is already exists';
        } else {

            $alradyExist = "";
            $count = 0;
            $input = 0;
            $lastid = "";
            for ($i = 0; $i < count($request->input('size')); $i++) {
                $sub = $request->input('size')[$i];
                $findSize = Product::select('*')
                        ->join('product_size', 'product_size.productid', '=', 'product.id')
                        ->join('size', 'size.id', '=', 'product_size.size')
                        ->where('product.catagory', $request->input('category'))
                        ->where('product.subcatagory', $request->input('subcategory'))
                        ->where('product_size.size', $sub)
                        ->get()
                        ->toArray();
                if (!empty($findSize)) {
                    $count++;
                    $alradyExist .= $findSize[0]['size'] . ', ';
                    $result = true;
                } else {

                    if ($input >= 0) {
                        $input--;
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
                    }
                    $objProductsize = new Product_size();
                    $objProductsize->productid = $lastid;
                    $objProductsize->size = $request->input('size')[$i];
                    $objProductsize->quantity = $request->input('quantity')[$i];
                    $objProductsize->created_at = date("Y-m-d h:i:s");
                    $objProductsize->updated_at = date("Y-m-d h:i:s");
                    $result = $objProductsize->save();
                }
            }
            $name = '';
            if ($lastid != '' && $request->file()) {
                for ($i = 0; $i < count($request->file('image')); $i++) {

                    $image = $request->file('image')[$i];
                    $name = time() . $i . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/product/');
                    $image->move($destinationPath, $name);
                    $objProduct = new Product_image();
                    $objProduct->productid = $lastid;
                    $objProduct->image = $name;
                    $result = $objProduct->save();
                }
            }
            if ($result) {
                if ($count == count($request->input('size'))) {
                    $return['status'] = 'error';
                    $return['message'] = 'this ' . $alradyExist . '  product is already exists';
                } else {
                    $return['status'] = 'success';
                    $return['message'] = ($alradyExist == '') ? 'product created successfully.' : 'product created successfully But ' . $alradyExist . ' is already exist in our system';
                    $return['redirect'] = route('product-list');
                }
            }
        }
        return $return;
    }

    public function editProduct($request, $id) {
        if (Product::find($id)->delete()) {
            $data['$resultsize'] = DB::table('product_size')
                            ->where('productid', $id)->delete();
            
        }
        $alradyExist = "";
        $count = 0;
        $input = 0;
        $lastid = "";
        for ($i = 0; $i < count($request->input('size')); $i++) {
            $sub = $request->input('size')[$i];
            $findSize = Product::select('*')
                    ->join('product_size', 'product_size.productid', '=', 'product.id')
                    ->join('size', 'size.id', '=', 'product_size.size')
                    ->where('product.catagory', $request->input('category'))
                    ->where('product.subcatagory', $request->input('subcategory'))
                    ->where('product_size.size', $sub)
                    ->get()
                    ->toArray();
            if (!empty($findSize)) {
                $count++;
                $alradyExist .= $findSize[0]['size'] . ', ';
                $result = true;
            } else {
                
                if ($input >= 0) {
                    $input--;
                    $objProduct = new Product();
                    $objProduct->id = $id;
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
                }
                $objProductsize = new Product_size();
                $objProductsize->productid = $lastid;
                $objProductsize->size = $request->input('size')[$i];
                $objProductsize->quantity = $request->input('quantity')[$i];
                $objProductsize->created_at = date("Y-m-d h:i:s");
                $objProductsize->updated_at = date("Y-m-d h:i:s");
                $result = $objProductsize->save();
            }
        }
        $name = '';
        if ($request->file() && $lastid !=  "") {
            $data['$resultimage'] = DB::table('product_image')
                        ->where('productid', $id)->delete();
            for ($i = 0; $i < count($request->file('image')); $i++) {
                $image = $request->file('image')[$i];
                $name = time() . $i . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/product/');
                $image->move($destinationPath, $name);
                $objProduct = new Product_image();
                $objProduct->productid = $lastid;
                $objProduct->image = $name;
                $result = $objProduct->save();
            }
        }
        if ($result) {
            if ($count == count($request->input('size'))) {
                $return['status'] = 'error';
                $return['message'] = 'this ' . $alradyExist . '  product is already exists';
            } else {
                $return['status'] = 'success';
                $return['message'] = ($alradyExist == '') ? 'product Edited successfully.' : 'product Edited successfully But ' . $alradyExist . ' is already exist in our system';
                $return['redirect'] = route('product-list');
            }
        }
        return $return;
    }

    public function getProductdetails($id) {
        $result = Product::select('*')
                ->where('id', $id)
                ->get();
        return $result;
    }

    public function getProduct() {
        $result = Product::select(DB::raw('group_concat(size.size) as size'),DB::raw('group_concat(product_size.quantity) as quantity'),'category.categoryname', 'subcategory.subcategoryname', 'product_image.image', 'product.price', 'product.description', 'product.productcode', 'product.productname', 'product.id')
                ->leftjoin('category', 'category.id', '=', 'product.catagory')
                ->leftjoin('subcategory', 'subcategory.id', '=', 'product.subcatagory')
                ->leftjoin('product_image', 'product_image.productid', '=', 'product.id')
                ->leftjoin('product_size', 'product_size.productid', '=', 'product.id')
                ->leftjoin('size', 'size.id', '=', 'product_size.size')
                ->groupBy('product.productname')
                ->get();
        return $result;
    }

    public function deleteProduct($data) {

        $data['result'] = Product::find($data['id'])->delete();
        $data['$resultsize'] = DB::table('product_size')
                        ->where('productid', $data['id'])->delete();
        $data['$resultimage'] = DB::table('product_image')
                        ->where('productid', $data['id'])->delete();
        return $data;
    }

}
