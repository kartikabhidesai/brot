<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cart extends Model {

    protected $table = 'cart';

    public function AddToCart($id, $userid) {

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
    public function addtocartnew($userid, $quantity, $id) {
        
        $findCart = Cart::where('productid', $id)->first();
        if (!empty($findCart)) {
            $return = false;
        } else {

            $objCart = new Cart();
            $objCart->productid = $id;
            $objCart->userid = $userid;
            $objCart->quantity = $quantity;
            $return = $objCart->save();
        }
        return $return;
    }

    public function Addquantity($data, $userid) {

        $return = DB::table('cart')
                ->where('productid', $data['id'])
                ->update(['quantity' => $data['quantity']]);
        return $return;
    }

    public function getCartitem($userid) {

        $result = Cart::select('product_image.image', 'product.price', 'product.description', 'product.productname', 'product.id', 'cart.quantity')
                ->leftjoin('product', 'product.id', '=', 'cart.productid')
                ->join('product_image', 'product_image.productid', '=', 'cart.productid')
                ->where('cart.userid', $userid)
                ->orderBy('cart.id', 'asc')
                ->get();
        return $result;
    }

    public function getCartDetails($userid) {

        $result = Cart::select('cart.id', 'cart.productid', 'cart.userid', 'cart.quantity')
                ->where('cart.userid', $userid)
                ->get();
        return $result;
    }

    public function deleteProduct($data) {

        $data = DB::table('cart')
                        ->where('productid', $data['id'])->delete();
        return $data;
    }

    public function deleteOrder($userid) {

        $data = DB::table('cart')
                        ->where('userid', $userid)->delete();
        return $data;
    }

}
