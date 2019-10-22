<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Order extends Model {

    protected $table = "order";
    public function getOrder(){
        
        $result = Order::select('product.productname','product_image.image','product.price','product.description','order.orderid','order.quantity','order.status')
                ->join('product','product.id','=','order.productid')
                ->join('product_image','product_image.productid','=','product.id')
                ->orderBy('order.id', 'asc')
                ->get();
        return $result;
    }
    
    public function getOrdernew(){
        
        $result = Order::select('product.productname','product_image.image','product.price','product.description','order.orderid','order.quantity','order.status')
                ->join('product','product.id','=','order.productid')
                ->join('product_image','product_image.productid','=','product.id')
                ->groupBy('order.orderid')
                ->orderBy('order.id', 'asc')
                ->get();
        return $result;
    }
    
    public function changestatusOrder($orderid){

        $result = DB::table('order')
                ->where('orderid', $orderid['id'])
                ->update(['status' => "confirm"]);
        return $result;
    }
    
    public function confirmStatus($orderid){
        
        $result = DB::table('order')
                ->where('orderid', $orderid['id'])
                ->update(['status' => "delivered"]);
        return $result;
    }
}
