<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cart extends Model
{
    protected $table = 'cart';
    
    public function AddToCart($id, $userid){

        $findCart = Cart::where('productid', $id)->first();
        if (!empty($findCart)) {
            $return = false;
        } else {
            $objCart = new Cart();
            $objCart->productid = $id;
            $objCart->userid = $userid;
            $return = $objCart->save();
        }
        return $return;
    }
    
    public function getCartitem($userid){

        $result = Cart::select('product_image.image', 'product.price', 'product.description','product.productname','product.id')
                ->leftjoin('product', 'product.id', '=', 'cart.productid')
                ->join('product_image', 'product_image.productid', '=', 'cart.productid')
                ->where('cart.userid',$userid)
                ->get();
        return $result;
    }
    public function deleteProduct($data) {

        $data = DB::table('cart')
                    ->where('productid', $data['id'])->delete();
        return $data;
    }
}
